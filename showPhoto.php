<html>
<head>
<style>
	img{
		width: 50%;
	}
</style>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class='text-center'>
		<?php
			echo "<h1>".$_GET['fn']."</h1>";
			echo "<div class='col-md-6 col-md-offset-3'>";
			echo "<img src='img/".$_GET['fn'].".jpg'>";
			echo "</div>";            
		?>
	</div>
</body>
</html>