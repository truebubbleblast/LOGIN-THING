<?php
	$db = mysqli_connect("localhost", "root", "", "ssbmtierlist");
	
	/* check connection */
	//mysqli function that displays any error:
	//mysqli_connect_errno()
	if(mysqli_connect_errno() != 0){
		echo "Error: ".mysqli_connect_error();
		exit();
	}
	$result = mysqli_query($db, "SELECT * FROM stier");
	while($row = mysqli_fetch_array($result)){
		echo $row[0]." - ".$row[1]." - ".$row[2]." - ".$row[3];
		echo "<br>";
	}	
	mysqli_close($db);
?>