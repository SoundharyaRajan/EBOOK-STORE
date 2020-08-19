<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
<title>BOOK DETAILS</title>
<style>
  body {
  background-image: url('admin1.jpg');
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
  padding: 15px;
  text-align: center;
}
th {
  text-align: center;
}
body {
  font-family: Arial;
}
* {
  box-sizing: border-box;
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
<body>
<br><br><br>
<center>
<h1><font color="#853249"> BOOK DETAILS</font></h1><br>
<table style="width:70%" >
<tr>
<th><font color="red">BOOK ID</font></th>
<th><font color="red">BOOK NAME</font></th>
<th> <font color="red">VIEW BOOK</font> </th>
<th><font color="red">BOOK PRICE</font></th>
<th><font color="red">DOWNLOAD BOOK</font></th>
<th><font color="red">DELETE BOOK</font></th>
</tr>
<tr>
<?php
include "main.php";
$namesql = "SELECT * FROM book ";
$result = mysqli_query($con,$namesql);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result)) 
{
?>
<td><?php echo $row["BOOKID"];?></td>
<td><?php echo $row["BOOKNAME"];?></td>
<td><a href="OOAD.pdf"><?php  echo $row["BOOK"];?></a></td>
<td><?php echo $row["PRICE"];?></td>
<td><a href="pay1.php"> Buy Book</a></td>
<td><a href="del.php?BOOKID=<?php echo $row["BOOKID"]; ?>">Delete</a></td>
</tr>
<?php 
}
}
?>
</table>
<form action="addbook.php"><center><br><br>
<button class="btn">Add Book</button>
</center></form>
</body>
</html>