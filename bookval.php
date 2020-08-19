<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>BOOK VALIDATION</title>
</head>
<body>
<?php 
session_start();
?>
<?php
include "main.php";
if(isset($_POST['button']))
{
$search = mysqli_real_escape_string($con,$_POST['search']);
if ($search != "")
{
$sql_query = "select count(*) as cntUser from book where BOOKNAME='".$search."' ";		
$result = mysqli_query($con,$sql_query);
$row = mysqli_fetch_array($result);
$count = $row['cntUser'];
echo $count;
if($count > 0)
{
$namesql = "SELECT * FROM book WHERE BOOKNAME = '".$search."'";
$result = mysqli_query($con,$namesql);
if(mysqli_num_rows($result)>0)
{
while($row = mysqli_fetch_assoc($result)) 
{
$bid = $row['BOOKID'];
$bname = $row['BOOKNAME'];
$book = $row['BOOK'];
$price = $row['PRICE'];
$_SESSION['bid']=$bid;
$_SESSION['bname']=$bname;
$_SESSION['book']=$book;
$_SESSION['price']=$price;
}
}
header("Location: bookavailablee.php");
}
else{
?>
<script language="javascript">
alert("NO BOOKS ARE AVILABLE");
window.location.href="login.php"
</script>
<?php
}
}}
?>
