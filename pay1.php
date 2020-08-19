<!DOCTYPE html>
<html>
<head>  
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>DOWNLOAD YOUR BOOK</title>
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
body {
background-image: url('back.jpg');
background-repeat: no-repeat;
background-attachment: fixed;  
background-size: cover;
}
.input-container {
display: -ms-flexbox; /* IE10 */
display: flex;
width: 100%;
margin-bottom: 15px;
}
.icon {
padding: 10px;
background: forestgreen;
color: white;
min-width: 50px;
text-align: center;
}
.input-field {
width: 100%;
padding: 10px;
outline: none;
}
.input-field:focus {
border: 2px solid forestgreen ;
}
.btn {
background-color: forestgreen;
color: white;
padding: 15px 20px;
border: none;
cursor: pointer;
width: 60%;
opacity: 0.9;
}
.btn:hover {
opacity: 1;
}
</style>
</head>
<body>
<a href=index.php  style="color:black">HOME</a>
<center>
<br>
<form name="RegForm" action="paid1.php" style="max-width:500px;margin:auto" onsubmit="return REGISTERATION()" method="post">
<center><br>
<b><h2><font color="#ff0066">BOOKING YOUR TICKETS</font></h2></b>
<br>
<div class="input-container">
<i class="fa fa-user icon"></i>
<input class="input-field" type="text" placeholder="Number of Passangers" name="user" required>
</div>
<div class="input-container">
<i class="fa fa-mobile icon" style='font-size:25px'></i>
<select name="splace" class="input-field" required >
<option value="start">Select Your Card </option>
<option value="Mayiladuthurai">Debit Card </option>
<option value="Chennai">Credit Card </option>
</select>
</div>
<div class="input-container">
<i class="fa fa-mobile icon" style='font-size:25px'></i>
<input class="input-field" type="text" placeholder="Card Number" name="confpsw" required>
</div>
<div class="input-container">
<i class="fa fa-mobile icon" style='font-size:25px'></i>
<input class="input-field" type="password" placeholder="CVV" name="age" required>
</div>
<div class="input-container">
<i class="fa fa-calendar icon"></i>
<input class="input-field" type="text" placeholder="Expairy Month" name="email" required>
</div>
<div class="input-container">
<i class="fa fa-calendar icon" ></i>
<input class="input-field" type="text" placeholder="Expairy Year" name="mobile" required>
</div>
<br>
<button type="submit" class="btn">Download</button>
</form>
</center>
</body>
</html>