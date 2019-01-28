

<?php
 
$servername="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$dbname="webbased"; // Database name 
 
// Connect to server and select database.
$conn = new mysqli($servername, $username, $password, $dbname);
 
// get data that sent from form 
$detail=$_POST['detail'];
$name=$_POST['name'];
$email=$_POST['email'];
 
$datetime=date("d/m/y h:i:s"); //create date time
 
$sql="INSERT INTO fquestions(detail, name, email)
VALUES('$detail', '$name', '$email')";
$result = $conn->query($sql);

 
if($result){
echo "Successful<BR>";
}
else {
echo "ERROR";
}

$conn->close();
?>