<?php
	if(!isset($_POST['id']) || $_POST['id'] == ""){
		echo "Incomplete data!";
		exit();
	}
	include("connector.php");
	$sql = mysqli_query($db, "DELETE FROM stier WHERE stier_id=".$_POST['id']);
	
	if($sql){
		echo "SUCCESS...YOU'VE ELIMINATED A LOVED ONE...I HOPE YOU'RE HAPPY WITH YOURSELF...<br>";
		echo "<a href='second_query.php'>";
		echo "<button class='btn btn-success'>View Data</button></a>";
	}else{
		echo "OOPS. TEEHEE. ERROR IN DELETING. PHEW.";
		echo mysqli_error($sql);
	}
?>