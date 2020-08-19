<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
<title>EBOOK MANAGEMENT</title>
<style>
.mySlides {display:none;}
body {font-family: Arial, Helvetica, sans-serif;}
.navbar {
width: 100%;
background-color: #555;
overflow: auto;
}
.navbar a {
float: left;
padding: 12px;
color: white;
text-decoration: none;
font-size: 17px;
}
.navbar a:hover {
background-color: #000;
}
.active {
background-color: #4CAF50;
}
@media screen and (max-width: 500px) {
.navbar a {
float: none;
display: block;
}
}
body {
background-image: url('download (2).jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: 100% 100%;
}
input[type=text], input[type=password] {
width: 80%;
padding: 8px;
margin: 5px 0 22px 0;
display: inline-block;
border: none;
color: black;
}
input[type=text]:focus, input[type=password]:focus {
background-color: #ddd;
outline: none;
}
.registerbtn {
background-color: #4CAF50;
color: white;
padding: 10px 20px;
margin: 8px 0;
border: none;
cursor: pointer;
width: 14%;
opacity: 0.9;
}
.registerbtn:hover {
opacity: 1;
}
.header {
text-align: center;
color:yellow;
}
.header h1 {
font-size: 60px;
}
.topnav {
overflow: hidden;
background-color: #e9e9e9;
}
.topnav a {
float: left;
display: block;
color: black;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}
.topnav a:hover {
background-color: #ddd;
color: black;
}
.topnav a.active {
background-color:SlateBlue;
color: white;
}
.topnav .login-container {
float: right;
}
.topnav input[type=text] {
padding: 6px;
margin-top: 8px;
font-size: 17px;
border: none;
width:120px;
}
.topnav .login-container button {
float: right;
padding: 6px 10px;
margin-top: 8px;
margin-right: 16px;
background-color: #555;
color: white;
font-size: 17px;
border: none;
cursor: pointer;
}
.topnav .login-container button:hover {
background-color: green;
}
@media screen and (max-width: 600px) {
.topnav .login-container {
float: none;
}
.topnav a, .topnav input[type=text], .topnav .login-container button {
float: none;
display: block;
text-align: left;
width: 100%;
margin: 0;
padding: 14px;
}
.topnav input[type=text] {
border: 1px solid #ccc;  
}
}
</style> 
</head>
<body>
<div class="header">
<h1>WELCOME TO E-BOOK STORE</h1>
</div>
<div class="topnav">
<a class="active" href="index.php">HOME</a>
<a href="admin.php">ADMIN</a>
<a href="signin.php">USER</a>
<div class="login-container">
<form action="feedback.php">
<button type="submit">FEEDBACK</button>
</form>
</div>
</div><br><br>
<div  class="w3-content w3-section" style="max-width:800px">
<img class="mySlides w3-animate-left" src="images (7).jpg"  style="width:900px;height:400px;border:0">
<img class="mySlides w3-animate-right" src="images (15).jpg" style="width:900px;height:400px;border:0">
<img class="mySlides w3-animate-top" src="index.jpg"  style="width:900px;height:400px;border:0">
<img class="mySlides w3-animate-bottom" src="yellow.jpg" style="width:900px;height:400px;border:0">
</div>
<script>
var myIndex = 0;
carousel();
function carousel() {
var i;
var x = document.getElementsByClassName("mySlides");
for (i = 0; i < x.length; i++) {
x[i].style.display = "none";  
}
myIndex++;
if (myIndex > x.length) {myIndex = 1}    
x[myIndex-1].style.display = "block";  
setTimeout(carousel, 2500);    
}
</script>
</body>
</html>