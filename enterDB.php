<?php
// Starting session
session_start();
?>

<?php

include 'dbh.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $heading = test_input($_POST["heading"]);
  $content = test_input($_POST["content"]);
  $author = test_input($_POST["author"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
$_SESSION["heading"] = $heading;
$_SESSION["content"] = $content;
$_SESSION["author"] = $author;
?>
<?php
$sql= "INSERT INTO blog(heading,content,author) VALUES ('$heading','$content','$author')";

$mysqli->query($sql);
header("location:showFilterPost.php");
$_SESSION['author']=$author;
?>