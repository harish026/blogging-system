<?php
	include 'dbh.php';
$email=$_POST['email'];
$pass=$_POST['pass'];
$sql="select * from book where email='$email' and pass='$pass'";
$result=$mysqli->query($sql);
if($result->num_rows>0)
{
	
	header('location:enterBlogPost.php');
}
else
    {
die(header('refresh: 3; url=index.php').'Invalid Credentials, wait 3 seconds or just click <a href="index.php">HERE</a> to check again.');
//header("Location: index.php?err=1"); }
	}
?>