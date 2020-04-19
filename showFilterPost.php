<?php
include 'dbh.php';
?>
<!DOCTYPE html>
<html>

<head>
	<title>Show Filter posts</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
<center>
<?php



$author=$_GET["author"];
$sql= "SELECT * FROM blog where AUTHOR='$author'";
$result=$mysqli->query($sql);

if($result->num_rows>0)
{
	while($row=$result->fetch_assoc()){
		echo "<div class=\"blog\">";
		echo "<br><h1><p><strong>".$row["heading"]."</strong></h1><br>".$row["content"];
		echo "</div>";
	}
	
}
else{
	echo alert("Not available yet") ;
}
	?>
	</center>
<br><br>
<center>
	<a href="index.php" style="text-decoration:none;">Click Here</a>
</center>