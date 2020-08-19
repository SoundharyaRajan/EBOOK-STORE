<!DOCTYPE html>
<html>
<head>
<title>REGISTER</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
font-family: Arial, Helvetica, sans-serif;
background-color: black;
background-image: url('1.jpg');
background-repeat: no-repeat;
background-attachment: fixed; 
background-size: 100% 100%;
}
* {
box-sizing: border-box;
}
input[type=text], input[type=password] {
width: 30%;
padding: 15px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
background-color:#45600;
color: black;
}
input[type=text]:focus, input[type=password]:focus {
background-color: #ddd;
outline: none;
}
hr {
border: 1px solid #f1f1f1;
margin-bottom: 25px;
}
.registerbtn {
background-color: #4CAF50;
color: white;
padding: 16px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 20%;
opacity: 0.9;
}
.registerbtn:hover {
opacity: 1;
}
a {
color: dodgerblue;
}
.signin {
background-color: #f1f1f1;
text-align: center;
}
</style>
</head>
<body>
<form action=""  method="post">
<input type="hidden" name="new" value="1"/>
<div class="container">
<h1><font color="yellow">REGISTRATION FORM</font></h1>
<p>Please fill in this form to create an account.</p>
<hr>
<label for="name"><b>Name</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" placeholder="Enter your name" name="name" required><br>
<label for="email"><b>Email</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" placeholder="Enter Email" name="email" required><br>
<label for="psw"><b>Password</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="password" placeholder="Enter Password" name="psw" required><br>
<label for="psw-confirm"><b>Confirm Password</b></label>&nbsp;
<input type="password" placeholder="Confirm Password" name="cpsw" required><br>
<label for="phone"><b>Phone</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" placeholder="Enter mobile no" name="phone" required><br>
<label for="area-intr"><b>Area of Interest</b></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text" placeholder="Enter your interest" name="area" required><br>
<hr>
<center> <button type="submit" class="registerbtn" name="btn">Register</button></center>
</div>
</form>
<?php
require('main.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
$uname =$_REQUEST['name'];
$email = $_REQUEST['email'];
$psw = $_REQUEST['psw'];
$confpsw = $_REQUEST['cpsw'];
$phone = $_REQUEST['phone'];
$area = $_REQUEST['area'];
$ins_query="insert into register
(`NAME`,`EMAIL`,`PASSWORD`,`CONFIRMPASSWORD`,`PHONE`,`INTEREST`)values
('$uname','$email','$psw','$confpsw','$phone','$area')";
if(mysqli_query($con,$ins_query))
{
?>
<script language="javascript">
alert("YOU ARE REGISTERED SUCCESFULLY");
window.location.href="index.php"
</script>
<?php
} 
else{
?>
<script language="javascript">
alert("FAILED TO REGISTER");
window.location.href="register.php"
</script>
<?php   
}
}
?>
</body>
</html>