<?php

include 'dbh.php';

$id=$_GET["id"];
$sql="DELETE FROM blog where id='$id'";
$conn->query($sql);
header("location:index.php");

?>