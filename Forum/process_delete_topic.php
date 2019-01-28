<!DOCTYPE html>
<html>

<head>

<?php

	// default
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "webbased";

	$conn = new mysqli($servername, $username, $password, $dbname);

	
	$nm = $_POST['id'];
	
	$sql = "DELETE FROM fquestions WHERE id=$nm";
	
	
	if ($conn->query($sql) == TRUE) {
	
		echo "successful!";
	}
	else echo "not successful!";
	
	$conn->close();	
?>

</head>

<body bgcolor="ffa07a">
	<br>
<form action="main_forum.php"><br>
    <input type="Submit" value="Return to main pages">
</form>
<body>
</html>