<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "webbased";

	$conn = new mysqli($servername, $username,$password,$dbname);

	if($conn->connect_error){
		die("Error Connection Failed" . $conn->connect_error);
	}

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$price = mysqli_real_escape_string($conn, $_POST['price']);
	$description = mysqli_real_escape_string($conn, $_POST['description']);
	$image = mysqli_real_escape_string($conn, $_POST['image']);

	$sql = "INSERT INTO tbl_product(name, price, description, image) VALUES ('$name', '$price', '$description', '$image')";

	if ($conn->query($sql) === TRUE) {
		echo "Record Added Succesfully";
	}else{
		echo "Error adding record" . $conn->error;
	}
	$conn->close();
?>