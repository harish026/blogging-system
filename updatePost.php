<?php
include 'dbh.php';
$id=$_GET["id"];
$content=$_content["content"];
$sql= "UPDATE blog SET content='$content' WHERE id='$id'";
$conn->query(sql);
header("location:index.php");

?>
dgregrg