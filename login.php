<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>SEARCH</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
background-image: url('admin1.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: 100% 100%;
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
</head>
<body><br><br>
<center>
<H1> <marquee><font color="#851294">WELCOME!</font>
</marquee></H1>
<h2>Search Your Books Here..</h2>
<br>
<form class="example" action="bookval.php" style="margin:auto;max-width:300px" method="POST">
<input type="text" placeholder="Search your book.." name="search">
<button type="submit" name="button"><i class="fa fa-search"></i></button><br><br><br>
</form>
</center><br><br>
<center><font color="#ff0066">
<h2>BEST AVAILABLE BOOKS ARE</h2></center></font>
<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a  href="ooad.php">
<img src="OOAD.jpg" alt="BOOK" style="width:200px;height:200px;border:0" >
</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a  href="bda.php">
<img src="bda.jpg" alt="BOOK" style="width:200px;height:200px;border:0" >
</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<a  href="cc.php">
<img src="cc.jpg" alt="CC BOOK" style="width:200px;height:200px;border:0" >
</a>
</body>
</html> 
