
<?php
 
$servername="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$dbname="webbased"; // Database name 
 
// Connect to server and select database.
$conn = new mysqli($servername, $username, $password, $dbname);
 
// get data that sent from form 
$topic=$_POST['topic'];
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];
 
$datetime=date("d/m/y h:i:s"); //create date time
 
$sql="INSERT INTO fquestions(topic, detail, name, email, datetime)
VALUES('$topic', '$detail', '$name', '$email', '$datetime')";
$result = $conn->query($sql);

 
if($result){
echo "Successful<BR>";
echo "<a href=main_forum.php>View your topic</a>";
}
else {
echo "ERROR";
}
$conn->close();
?>