<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ADD BOOK</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}
body {
  background-image: url('log.jpg');
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
/* Set a style for the submit button */
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
<form name="RegForm" action="" style="max-width:500px;margin:auto" method="post">
<input type="hidden" name="new" value="1"/>
<center><br>
<b><h1><font color="#ff0066">ADD BOOK DETAILS</font></h1></b>
<div class="input-container">
<i class="fa fa-book icon"></i>
<input class="input-field" type="text" placeholder="Book ID" name="bid" required>
</div>
<div class="input-container">
<i class="fa fa-book icon" ></i>
<input class="input-field" type="text" placeholder="Book Name " name="bname" required>
</div>
<div class="input-container">
<i class="fa fa-search icon" ></i>
<input class="input-field" type="text" placeholder="Book " name="book" required>
</div>
<div class="input-container">
<i class="fa fa-rupee icon"></i>
<input class="input-field" type="text" placeholder="Price " name="price" required>
</div>
<br>
<button type="submit" class="btn">Submit</button>
</form>
</center>
<?php
require('main.php');
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
$bid =$_REQUEST['bid'];
$bname = $_REQUEST['bname'];
$book = $_REQUEST['book'];
$price = $_REQUEST['price'];  
$ins_query="insert into book
(`BOOKID`,`BOOKNAME`,`BOOK`,`PRICE`)values
('$bid','$bname','$book','$price')";
if(mysqli_query($con,$ins_query))
{
?>  
<script language="javascript">
alert("NEW BOOK ADDED SUCCESFULLY"); 
window.location.href="bookdetail.php"
</script>
<?php
} 
else{
?>
<script language="javascript">
alert("FAILED TO INSERT");
window.location.href="addbook.php"
</script>
<?php   
}
}
?>
</body>
</html>
