<?php

if(isset($_POST['pname'])){

	$product_name = $_POST['pname'];
	$product_price = $_POST['price'];
	$product_qty = $_POST['qty'];
	var_dump($product_name);
	var_dump($product_price);
	var_dump($product_qty);
	echo "<br>";
	echo "<table class = 'table table-bordered'>";
	echo "<tr>";
	
	foreach($product_name as $key=>$value){
		echo "<td>";
		echo "Product # ".($key+1)." - ".$value."";
		echo "</td>";
	}
	foreach($product_price as $key=>$value){
		echo "<td>";
		echo " - Php ".$value;
		echo "</td>";
		}
	
	foreach($product_qty as $key=>$value){
		echo "<td>";
		echo "(".$value.")<br>";
		echo "</td>";
		}
	echo "</tr>";
	echo "</table>";
}else{
	echo "NO DATA SENT";
}