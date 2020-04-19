<?php
	include 'dbh.php';
$name=$_POST["name"];
$email=$_POST["email"];
$pass=$_POST["pass"];
$date=$_POST["date"];
$month=$_POST["month"];
$year=$_POST["year"];
$gender=$_POST["gender"];
$sql="insert into book(name,email,pass,date,month,year,gender) VALUES ('$name','$email','$pass','$date','$month','$year','$gender')";
$mysqli->query($sql);
echo '<script type="text/javascript">alert("Data Entered")</script>';
header('location:index.php');
if(isset($_POST['submit']))
{
	echo '<script type="text/javascript"> alert("signup button clicked")';
}
?>