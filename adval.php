<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>ADMIN VALIDATION</title>
</head>
<body>
<?php 
session_start();
?>
<?php
include "main.php";
if(isset($_POST['button'])){
$uname = mysqli_real_escape_string($con,$_POST['admin']);
$password = mysqli_real_escape_string($con,$_POST['password']);
if ($uname != "" && $password != ""){
$sql_query = "select count(*) as cntUser from adlogin where NAME='".$uname."' and PASSWORD='".$password."'";		
$result = mysqli_query($con,$sql_query);
$row = mysqli_fetch_array($result);
$count = $row['cntUser'];
if($count > 0){			
$namesql = "SELECT * FROM adlogin WHERE USERNAME = '".$uname."'";
$result = mysqli_query($con,$namesql);
echo $result  ;
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
$email=$row["EMAIL"];
$mobileno=$row["MOBILENO"];		
$_SESSION['email']=$email;
$_SESSION['mobileno']=$mobileno;	
}
}
$_SESSION['uname'] = $uname;
header("Location: select.php");			
}
else{
?>
<script language="javascript">
alert("INCORRECT ADMIN NAME OR PASSWORD");
window.location.href="admin.php"
</script>
<?php
}
}
}
?>
</body>
</html>
