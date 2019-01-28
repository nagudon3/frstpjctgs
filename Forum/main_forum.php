<!DOCTYPE html>
<html>
<head>
	<title>My forum</title>
</head>
<body bgcolor="FFE4C4">

<h1 align="center">List of forum</h1>

<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webbased";

// [1] Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);
$sql="SELECT * FROM fquestions ORDER BY id ASC";
// OREDER BY Ascending
 
$result = $conn->query($sql);
?>
 
<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#000000">
<tr>
<td width="5%" align="center" bgcolor="#7FFFD4"><strong>Id</strong></td>
<td width="53%" align="center" bgcolor="#7FFFD4"><strong>Topic</strong></td>
<td width="13%" align="center" bgcolor="#7FFFD4"><strong>Date/Time</strong></td>
</tr>
 
<?php
 
// Start looping table row
while($rows = $result->fetch_assoc()){
?>
<tr>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['id']; ?></td>
<td bgcolor="#FFFFFF"><a href="view_topic.php"><?php echo $rows['topic']; ?></a><BR></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>
 
<?php
// Exit looping and close connection 
}
$conn->close();
?>
 
<tr>
<td colspan="5" align="center" bgcolor="#8FBC8F">
	<a href="new_topic.php">
		<p>Create New Topic</p>
	</a>
	<a href="delete_topic.php">
		<p>Delete Topic</p>
	</a>
</td>
</tr>
</table>
</body>
</html>
