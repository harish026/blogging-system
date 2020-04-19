<?php
	include 'dbh.php';
?>
<!DOCTYPE html>
<head>
	<title>blog :-)</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
	<div class="header col-sm-12">
	<img src="https://www.thebalancesmb.com/thmb/9-TaSUt-qCdOp1Xh3P43mutTmeA=/2121x1414/filters:fill(auto,1)/GettyImages-887987150-5c770377c9e77c00011c82e6.jpg" style="width:100%; height:600px;">
	</div>
</div>
</div>
<center>
	<div class="button"><a href="login.html" style="color:white; text-decoration:none;" >Write Post</div>
</center><br>
<center>
<?php


$sql= "SELECT * FROM blog";

$result=$conn->query($sql);
if($result->num_rows>0)
{
	while($row=$result->fetch_assoc()){
		echo "<div class=\"blog\">";
		echo "<h1>".$row["heading"]."</h1><br><p><strong>".$row["content"]."</strong></p>";
		echo "<a href='showFilterPost.php?author=".$row["author"]."'><div class=\"button1\">Show all post by author</div></a> &nbsp";
		echo "<a href='deletePost.php?id=".$row["id"]."'><div class=\"button1\">Delete Post</div></a><hr>";
		echo "</div>";
	
	}
	
}


?></center>
</body>