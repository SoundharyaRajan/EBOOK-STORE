<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>DELETE </title>
</head>
<body>
<?php
require('main.php');
$BOOKID=$_REQUEST['BOOKID'];
$query = "SELECT * from book where BOOKID='".$BOOKID."'"; 
$result = mysqli_query($con, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
echo "oooo";
$disabled="";
$query = "DELETE FROM book WHERE BOOKID=$BOOKID"; 
$result= mysqli_query($con,$query) or die ( mysqli_error());
header("Location: bookdetail.php"); 	
?>
</body>
</html>
