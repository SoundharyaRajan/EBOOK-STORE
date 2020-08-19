<!DOCTYPE html>
<html>
<head>
<title>FEEDBACK</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;
background-image: url('feed.jpg');
background-repeat: no-repeat;
background-attachment: fixed;
background-size: 100% 100%;
}
input[type=text], select, textarea {
width: 100%;
padding: 12px;
border: 2px solid #ccc;
border-radius: 4px;
box-sizing: border-box;
margin-top: 6px;
margin-bottom: 16px;
resize: vertical;
}
input[type=submit] {
background-color: #4CAF50;
color: white;
padding: 12px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
}
input[type=submit]:hover {
background-color: #45a049;
}
.container {
border-radius: 5px;
background-color: #f2f2f2;
padding: 20px;
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
</style>
</head>
<body>
<br>
<Center><h1><font color="yellow">FEEDBACK FORM</font></h1></CENTER>
<div class="container">
<form action="thanks.php">
<b><label for="fname">NAME</label></b>
<input type="text" id="name" name="name" required>
<b><label for="mail">MAIL ID</label></b>
<input type="text" id="mail" name="mail" required >
<b> <label for="country">COUNTRY</label></b>
<select id="country" name="country">
<option value="country name">Choose your country</option>
<option value="australia">India</option>
<option value="canada">Canada</option>
<option value="usa">USA</option>
<option value="australia">Australia</option>
</select>
<b><label for="feedback">FEEDBACK</label></b>
<textarea id="feedback" name="feedback" style="height:150px" required></textarea>
<center> <button type="submit" class="registerbtn">submit</button></center>
</form>
</div>
</body>
</html>
