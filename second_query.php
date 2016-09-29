<?php
	include("connector.php");
	$sql = mysqli_query($db, "SELECT * FROM stier");
?>
<html>
<head>
	<link rel='stylesheet' href='css/bootstrap.min.css'>
<body>
<?php
	while($tier = mysqli_fetch_array($sql)){
		echo "<div class='col-md-2'>";
		echo "<a href='showSTier.php?id=".$tier[0]."'>";
		echo "<button class='btn btn-warning' style='width: 200px; height: 100px;'>";
		echo "<span class ='glyphicon glyphicon-star' style='font-size: 30px;'>&nbsp;";
		echo $tier[1];
		echo "</span></button> ";
		echo "</div>";
	}
?>
</body>
</html>