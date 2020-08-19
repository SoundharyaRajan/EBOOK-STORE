<!DOCTYPE html>
<html>
<head>
<title>USER DETAILS</title>
<style>
body {
  background-image: url('brown.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  background-color: #ffffff;
}
th, td {
  padding: 20px;
}
th {
  text-align: left;
}
.btn {
  background-color: green;
  color: white;
  padding: 10px 10px;
  border: none;
  cursor: pointer;
  width: 15%;
  opacity: 0.9;
}
.btn:hover {
  opacity: 1;
}
</style>
</head>
<body><center><br><br>
<h1><font color="yellow">USER DETAILS</font></h1>
<?php
include "main.php";
$namesql = "SELECT * FROM register ";
$result = mysqli_query($con,$namesql);
if(mysqli_num_rows($result)>0)
{
?>
<table style="width:94%">
<tr>
<th> <font color="red">USER NAME</font></th>
<th><font color="red">EMAIL ID</font></th>
<th><font color="red">PHONE NO</font></th>
<th><font color="red">INTEREST</font></th>  
</tr>
<?php
while($row = mysqli_fetch_assoc($result)) 
 {
$user = $row['NAME'];
$email = $row['EMAIL'];                        
$phone = $row['PHONE'];
$interest = $row['INTEREST'];
$_SESSION['user']=$user;
$_SESSION['email']=$email;
$_SESSION['phone']=$phone;
$_SESSION['interest']=$interest;
?>
<tr>
<td><?php echo $_SESSION["user"];?></td>
<td><?php echo $_SESSION["email"];?></td>  
<td><?php echo $_SESSION["phone"];?></td>
<td><?php echo $_SESSION["interest"];?></td>
<?php
}
}
?></tr>
</table>
<br>
<button onClick="myFunction()" class="btn">
<div align="center">Print Details</div>
</button><script>
function myFunction() {
window.print();
}
</script>
</center>
</body>
</html>