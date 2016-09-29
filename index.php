<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<form action="index.php" method="GET">
		<input type='text' name='number'>
		<input type='submit' class='btn btn-success'>
	</form>
		<?php 
			if(isset($_GET['number']) ){
				$limit = $_GET['number'];
				echo "<table class='table table-bordered'>";
				for($x = 1; $x <= $limit; $x++){
					echo "<tr>";
					for($y = 1; $y <= $limit; $y++){
						echo "<td>";
						echo $x * $y;
						echo "</td>";
					}
					echo "</tr>";
				}
			}
			echo "</table>"
		?>
	</table>
</body>
</html>
<script src="js/jquery.min,js"></script>
<script>
	
</script>