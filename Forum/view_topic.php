<!DOCTYPE html>
<html>
<head>

</head>
<body bgcolor="FFC0CB">

<h1 align="center">Detail of forum</h1>

<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webbased";

// [1] Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// get value of id that sent from address bar 
$sql="SELECT topic, detail, name, email, reply, datetime FROM fquestions";
$result = $conn->query($sql);
?>

<table width="90%" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<td width="50%" align="center" bgcolor="#BA55D3"><strong>Topic</strong></td>
<td width="50%" align="center" bgcolor="#BA55D3"><strong>Description</strong></td>
<td width="20%" align="center" bgcolor="#BA55D3"><strong>By</strong></td>
<td width="10%" align="center" bgcolor="#BA55D3"><strong>Replies</strong></td>
<td width="10%" align="center" bgcolor="#BA55D3"><strong>Date/Time</strong></td>
</tr>
 
<?php 
// Start looping table row
while($rows = $result->fetch_assoc()){
?>

<tr>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['topic']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['detail']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['name']; ?></td>
<td align="center" bgcolor="#FFFFFF"><a href="reply.php"><?php echo $rows['reply']; ?></td>
<td align="center" bgcolor="#FFFFFF"><?php echo $rows['datetime']; ?></td>
</tr>
 
<?php
// Exit looping and close connection 
}
$conn->close();
?>
<br>
<tr>
<td colspan="5" align="right" bgcolor="#DCDCDC">
	<a href="main_forum.php">
		<p>Return to main pages</p>
</td>
</tr>
</table>
</body>
</html>