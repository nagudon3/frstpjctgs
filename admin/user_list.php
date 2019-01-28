<html>
<center><Strong><br>--------------------------------------------------------------------<br>
<h style="color:black;"><h style=" font-size:150%;">User LIST</Strong>
<p><input type ="button" value = "Back" onclick = "location = 'remove_user.php'"/></p>
<br>---------------------------------------------------------------------<br><br> </center>


</html>

<?php
include 'conn.php';

$sql = "SELECT * FROM user";
$result = $con->query($sql);


	echo ' <table>
		<tr>
			<tr><table border = "1"></tr>;
			<th width = "30%">User ID </th>
			<th width = "30%">Name</th>
			<th width = "30%">Email</th>
		</tr>';

	while($row = $result->fetch_array())
	{
		$ID = $row['uID'];
		echo '
		<tr>
			<td>'.$row['uID'].'</td>
			<td width = "30%">'.$row['FirstName'].'</td>
			<td width = "30%">'.$row['Email'].'</td> 
			
		</tr>';
		
	
		
	}
	
	echo'
	</table>';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webbased";

//Create Connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//Check Connection
if(!$conn)
{
	die("Connection failed: " .mysqli_connect_error());
	
	$sql = "SELECT userid, FirstName, Email";
	$result = mysqli_query($conn, $sql);
	
			
	if(mysqli_num_rows($result) > 0)
	{
		//print out each row of data in database
		while($row = mysqli_fetch_assoc($result))
		{
			echo '
			<tr>
				<td>'.$row["userid"].'</td>
				<td>'.$row["FirstName"].' </td>
				<td>'.$row["Email"].'</td>
			<tr>';
			
			

		}
	}

	else
	{
		echo "0 result"; 
	}

	
}

mysqli_close($conn);
?>