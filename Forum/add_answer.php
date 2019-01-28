<?php
 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webbased";

// [1] Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);
 
// get values that sent from form 
$a_answer=$_POST['a_answer'];
$question_id=$_POST['question_id'];
$a_name=$_POST['a_name'];
$a_email=$_POST['a_email'];

$a_datetime=date("d/m/y H:i:s"); // create date and time
 
// Insert answer 
$sql2="INSERT INTO fanswer(a_answer, a_name, a_email, a_datetime)VALUES('a_answer', 'a_name', 'a_email',  'datetime')";
$result = $conn->query($sql2);
 
if($result){
echo "Successful<BR>";
echo "<a href='view_topic.php?id="."'>View your answer</a>";
 
$sql3="SELECT a_answer, question_id, a_name, a_email, a_datetime FROM fanswer";
$result = $conn->query($sql3);
}
else {
echo "ERROR";
}
 
// Close connection
$conn->close();
?>