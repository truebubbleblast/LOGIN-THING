<?php
	include("connector.php");
	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$result = mysqli_query($db, "SELECT * FROM stier WHERE stier_id=".$id);
		$info = mysqli_fetch_row($result);
	}
?>
<html>
<html>
<head>
	<link rel='stylesheet' href='css/bootstrap.min.css'>
<body>
<div class='row'>
	<div class='col-md-6 col-md-offset-3'>
		<h1><?php echo $info[1]." ".$info[2];?></h1>
		<p>ID#: <?php echo $info[0];?></p>
		<p>Password: <?php echo $info[3];?> </p>
		<?php
			for($x=1;$x<=$info[4];$x++){
				echo "<span class='glyphicon glyphicon-star'></span>";
			}
		?>
		<br><br>
		<p><a href='second_query.php'>
			<button class='btn btn-primary'>Back</button>
		</a></p>
		<p>
			<form method='POST' action='deleteCharacter.php' onsubmit='return check();'>
				<input type='text' value='<?php echo $info[0];?>' name='id' hidden>
				<input class='btn btn-danger' type='submit' value='Delete'>
			</form>
		</p>
	</div>
</div>
</body>
</html>
<script>
	function check(){
		var answer = confirm("Yo, are you sure about deleting <?php echo $info[1];?>'s record? THINK OF THE CHILDREN!!");
		return answer;
	}
</script>