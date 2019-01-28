<?php
include 'conn.php';

if(isset($_GET['Delete'])){
	$uID = $_GET['uID'];
	$sql = "DELETE FROM user WHERE uID = '$uID'";
	
	if($con->query($sql)){
		echo "UserID " . $uID . " removed";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . mysqli_error($con);
	}
}
mysqli_close($con);
?>
<html>
<body>
	<div align = "center">
	<h1>Remove User Account</h1><br><br>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="get">
	<div align = "center">
	<div class="fieldSet">

		<legend>Remove Users</legend>
		<fieldset>
			<p><label class="field" for="uID"><span></span>UserID:</label><input type="text" name="uID" class="textbox-300" /></p>
				<div>
				<input type="submit" name="Delete" value="Delete">
				</div>
			<p><input type ="button" value = "User List" onclick = "location = 'user_list.php'"/></p><br><br>
			<p><input type ="button" value = "Back" onclick = "location = 'admin.php'"/></p>

		</div>
		</div>
</form>
<style type="text/css">
div.fieldSet {
	border: solid black thin;
	width: 500px;
	background-color:	#D3D3D3;
}
fieldset {
	border: none;
	margin: 5 5 5 5;
	padding 0;
}
legend {
	font-size: 20px;
	background-color: rgb(255, 0, 0);opacity:0.4;;
	color: white;
	vertical-align: left;
	text-align: center;
	padding: 5px;
}
label.field {
	text-align: left;
	width: 150px;
	float: left;
	font-weight: bold;
}
input.textbox-300 {
	width: 200px;
	float: center;
	background-color:hsla(0, 100%, 30%, 0.3);
}
input.submit {
	float: center;
}
fieldset p {
	clear: both;
	padding: 5px;
}
body{
	background-color: #FAEBD7;
	
}
</style>
<body>
<html>
