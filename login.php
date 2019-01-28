<html>
	<link rel="stylesheet" type="text/css" href="style.css">
	<div class="header">
		<h2>Login</h2>
	</div>
	<form action="login.php" method="post">
		<div class="input-group">
			<label>User ID </label>
			<input type="text" name="userid" required >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password" required >
		</div>
		<p><input type="submit" name="login" value="Login"></p>
		<a href="register.php">Register</a>
		<a href="index.html">Main page</a>
	</form>
</html>
<?php
include('dbcon.php');
session_start();
if(isset($_POST['userid'])){
	$_SESSION['userid'] = $_POST['userid'];
	$userid = $_POST['userid'];
	$password = $_POST['password'];
	$qry = "SELECT * FROM `user` WHERE `userid`='$userid' AND `password`='$password'";
	$run = mysqli_query($con,$qry);
	$row = mysqli_num_rows($run);
	if($row<1){
		?>
		<script>
		alert('Username or Password does not match!!!');
		window.open('login.php','_self');
		</script>
		<?php
	}
	else{
		$data = mysqli_fetch_assoc($run);
		$id = $data['id'];
		session_start();
		$_SESSION['uid']=$id;
		header('location:user.php');
	}
}
?>