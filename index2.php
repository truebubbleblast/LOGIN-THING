<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="text-center">
		<h1>Enter Products: </h1>
		<input type='text' name='pname'><br>
		<input type='text' name='price'><br>
		<input type='text' name='qty'><br>
		<input type='button' value='Add' id='add'>
	</div>
	<div class='row text-center'>
		<div class='col-xs-6 new_products'>
		</div>
		<form method="POST" action="saveProducts.php">
			<div class='col-xs-6 special_area'>
			</div>
			<input type='submit'>
		</form>
	</div>
</body>
</html>
<script src="js/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$('#add').on("click", function(){
			var name = $("input[name='pname']").val();
			var price = $("input[name='price']").val();
			var qty = $("input[name='qty']").val();
			
			var a = "<div class='alert alert-success'>"+name+" @ Php "+price+"("+qty+")</div>";
			$(".new_products").append(a);
			var b = "<input type='text' value='"+name+"' name='pname[]'>";
			var b1 = "<input type='text' value='"+price+"' name='price[]'>";
			var b2 = "<input type='text' value='"+qty+"' name='qty[]'>";
			$(".special_area").append(b);
			$(".special_area").append(b1);
			$(".special_area").append(b2);
		});
	});
</script>