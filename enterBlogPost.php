<?php
include 'dbh.php';
?>

<!DOCTYPE HTML>
<html>
    	<head>
    		<meta charset="UTF-8">
    		<title>login</title>
    		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
    		<!--
    			<link rel="shortcut icon" href="images/favicon.png">
    			<link rel="apple-touch-icon" href="images/apple-touch-icon.png"> 
    		-->
    		<link rel="stylesheet" href="css/main.css">
    		<script>window.$ = window.jQuery = WLJQ;</script>
    		<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/content.css">
  <style>
	</style>
    	</head>
<body>
<br><br>
<div class="container">
	<div class="row" >
		
<center><form method="POST" action="enterDB.php">

	<div class="input-group input-group-icon">
		<input type="text" name="heading" placeholder="heading" id="id1" onblur="validateform1()">
		<div class="input-icon"><i class="fa fa-user"></i>
		</div></div>
		
		
		<div class="input-group input-group-icon">
		<input type="text" name="content" placeholder="content" id="id1" onblur="validateform2()">
		<div class="input-icon"><i class="fa fa-user"></i></div></div>
		
		<div class="input-group input-group-icon">
		<input type="text" name="author" placeholder="author" id="id1" onblur="validateform1()">
		<div class="input-icon"><i class="fa fa-user"></i></div></div>
		
		<input type="submit" value="Submit Post" onclick="submitClick()"><br><br>
		<input type="submit" value="View Posts" onclick="submitClick()"><br>
</form></center>

</div>
</div>
<script>
	function validateform1()
	{
	var letters = /^[A-Za-z]+$/;
	var email=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	var numbers=/^[0-9]+$/;
	var x=document.getElementById("id1").value.length;
	if(x<3){
	document.getElementById("id1").style.background="red";
	}
	else {
	document.getElementById("id1").style.background="blue";}
	}
	function validateform2()
	{
	var x1=document.getElementById("id2").value.length;
	if(x1<3){
	document.getElementById("id2").style.background="red";
	}
	else {
	document.getElementById("id2").style.background="blue";}
	}
	</script>
</body>
</html>