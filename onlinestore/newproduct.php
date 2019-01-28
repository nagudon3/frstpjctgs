<!DOCTYPE html>
<html>
<head>
	<title>New Product</title>
</head>
<body>

	<h2>Please Fill all Details of the Product</h2>
	<form method="POST" action="newproduct.php" enctype="multipart/form-data">
		<label>Select Product Image</label>
		<input type="file" name="image">
		<label>Product Name</label>
		<input type="text" name="pname">
		<label>Price</label>
		<input type="text" name="price">
		<label>Product Description: </label>
		<input type="text" name="pdes">
		<input type="submit" name="Confirm">
	</form>
	<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "webbased";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if (!$conn) {
		die("Error: Cannot connect to the Database. ". mysqli_connect_error());
	}
	
	$sql ="INSERT INTO tbl_product ( image, name, price, description) VALUES ('".$_POST["image"]. "','".$_POST["pname"]."','".$_POST["price"]."','".$_POST["description"]."')";
	?>
</body>
</html>