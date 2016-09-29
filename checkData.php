<link rel="stylesheet" href="css/bootstrap.min.css">
<?php
	if($_POST['yuzaneimu'] == 'harambe123' && $_POST['pasuwado'] == 'ripinpieces'){
		echo "<button class='btn btn-success'>RIP ".$_POST['yuzaneimu']."...</button>";
	}else if($_POST['yuzaneimu'] == 'KITT'){
		echo "<h1>SIGE, ".$_POST['yuzaneimu']."! C-STICK SPAM PA MORE.</h1>";
	}
	else{
	echo "<button class='btn btn-danger'>INCORRECT USERNAME/PASSWORD! SHUTTING DOWN NOW.</button>";
	}
?>