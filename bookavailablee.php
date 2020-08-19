<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
<title>BOOK AVAILABILITY</title>
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
  text-align: left;
}
body {
  font-family: Arial;
}
* {
  box-sizing: border-box;
}
form.example input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
}
form.example button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
}
form.example button:hover {
  background: #0b7dda;
}
form.example::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</style>
</head>
<body><center><br><br>
<h2>Search Your Books..</h2>
<br>
<form class="example" action="bookval.php" style="margin:auto;max-width:300px" method="POST">
<input type="text" placeholder=<?php echo $_SESSION['bname']?> name="search">
<button type="submit" name="button"><i class="fa fa-search"></i></button>
</form>
</center>
<br><br>
<center>
<h2><font color="green">AVAILABLE BOOK DETAILS</font></h2>
<?php
include "main.php";
$namesql = "SELECT * FROM book WHERE BOOKNAME = '".$_SESSION['bname']."'";
$result = mysqli_query($con,$namesql);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result)) 
{
?>
<table style="width:70%" >
<tr>
<th>BOOK ID</th>
<td><?php echo $row["BOOKID"];?></td>
</tr>
<tr>
<th>BOOK NAME</th>
<td><?php echo $row["BOOKNAME"];?></td>
</tr>
<tr>
<th> VIEW BOOK </th>
<td><a href="<?php  echo $row["BOOK"];?>"><?php  echo $row["BOOK"];?></a></td>
</tr> <tr>
<th>BOOK PRICE</th> 
<td><?php echo $row["PRICE"];?></td>
</tr>
<tr>
<th>DOWNLOAD BOOK</th>
<td><a href="pay.php"> Buy Book</a></td>
</tr> 
<?php 
}
}
?>
</center>
</form>
</body>
</html>