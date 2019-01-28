<?php 
	session_start();

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'resume');

	// variable declaration
	$uID = "";
	$FirstName = "";
	$LastName = "";
	$NRIC = "";
	$Email    = "";
	$TelephoneNo = "";
	$website		 =  "";
	$vision	 		 =  "";
	$Uaddress		 =  "";
	$postalcode	 	 =  "";
	$city	    	 =  "";
	$region			 =  "";
	$twitter		 =  "";
	$instagram		 =  "";
	$qualification	 =  "";
	$year			 =  "";
	$school			 =  "";
	$grade			 =  "";
	$Cname			 =  "";
	$Cdate	 		 =  "";
	$Caddress		 =  "";
	$Cno			 =  "";
	$Crespon		 =  "";
	$Adetails		 =  "";
	$Sdetails		 =  "";
	$FirstL			 =  "";
	$SecondL		 =  "";
	$Idetails		 =  "";
	$Rdetails		 =  "";
	$errors   = array(); 
	// call the register() function if register_btn is clicked
	if (isset($_POST['register_btn'])) {
		register();
	}

	// call the login() function if register_btn is clicked
	if (isset($_POST['login_btn'])) {
		login();
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: ../login.php");
	}

	// REGISTER USER
	function register(){
		global $db, $errors;

		// receive all input values from the form
		$uID 			 =  e($_POST['uID']);
		$FirstName		 =  e($_POST['FirstName']);
		$LastName   	 =  e($_POST['LastName']);
		$NRIC			 =  e($_POST['NRIC']);
		$Email     	 	 =  e($_POST['Email']);
		$TelephoneNo 	 =  e($_POST['TelephoneNo']);
		$password_1 	 =  e($_POST['password_1']);
		$password_2 	 =  e($_POST['password_2']);
		$website		 =  e($_POST['website']);
		$vision	 		 =  e($_POST['vision']);
		$Uaddress		 =  e($_POST['Uaddress']);
		$postalcode	 	 =  e($_POST['postalcode']);
		$city	    	 =  e($_POST['city']);
		$region			 =  e($_POST['region']);
		$twitter		 =  e($_POST['twitter']);
		$instagram		 =  e($_POST['instagram']);
		$qualification	 =  e($_POST['qualification']);
		$year			 =  e($_POST['year']);
		$school			 =  e($_POST['school']);
		$grade			 =  e($_POST['grade']);
		$Cname			 =  e($_POST['Cname']);
		$Cdate	 		 =  e($_POST['Cdate']);
		$Caddress		 =  e($_POST['Caddress']);
		$Cno			 =  e($_POST['Cno']);
		$Crespon		 =  e($_POST['Crespon']);
		$Adetails		 =  e($_POST['Adetails']);
		$Sdetails		 =  e($_POST['Sdetails']);
		$FirstL			 =  e($_POST['FirstL']);
		$SecondL		 =  e($_POST['SecondL']);
		$Idetails		 =  e($_POST['Idetails']);
		$Rdetails		 =  e($_POST['Rdetails']);
		

		// form validation: ensure that the form is correctly filled
		if (empty($uID)) { 
			array_push($errors, "ID is required"); 
		}
		if (empty($FirstName)) { 
			array_push($errors, "Firstname is required"); 
		}
		if (empty($LastName)) { 
			array_push($errors, "Lastname is required"); 
		}
		if (empty($NRIC)) { 
			array_push($errors, "NRIC is required"); 
		}
		if (empty($Email)) { 
			array_push($errors, "Email is required");
		}
		if (empty($TelephoneNo)) { 
			array_push($errors, "TelephoneNo is required"); 
		}
		if (empty($password_1)) { 
			array_push($errors, "Password is required"); 
		}
		if ($password_1 != $password_2) {
			array_push($errors, "The two passwords do not match");
		}
		if (empty($website)) { 
			array_push($errors, "Website is required"); 
		}
		if (empty($vision)) { 
			array_push($errors, "Vision is required"); 
		}
		if (empty($Uaddress)) { 
			array_push($errors, "Address is required"); 
		}
		if (empty($postalcode)) { 
			array_push($errors, "Postal Code is required"); 
		}
		if (empty($city)) { 
			array_push($errors, "City is required"); 
		}
		if (empty($region)) { 
			array_push($errors, "Region is required"); 
		}
		if (empty($twitter)) { 
			array_push($errors, "Twitter is required"); 
		}
		if (empty($instagram)) { 
			array_push($errors, "Instagram is required"); 
		}
		if (empty($qualification)) { 
			array_push($errors, "Qualification is required"); 
		}
		if (empty($year)) { 
			array_push($errors, "Year is required"); 
		}
		if (empty($school)) { 
			array_push($errors, "School is required"); 
		}
		if (empty($grade)) { 
			array_push($errors, "Grade is required"); 
		}
		if (empty($Cname)) { 
			array_push($errors, "Company Name is required"); 
		}
		if (empty($Cdate)) { 
			array_push($errors, "Working Date is required"); 
		}
		if (empty($Caddress)) { 
			array_push($errors, "Company Address is required"); 
		}
		if (empty($Cno)) { 
			array_push($errors, "Company Number is required"); 
		}
		if (empty($Crespon)) { 
			array_push($errors, "Responsibilities is required"); 
		}
		if (empty($Adetails)) { 
			array_push($errors, "Awards Details is required"); 
		}
		if (empty($Sdetails)) { 
			array_push($errors, "Skill Details is required"); 
		}
		if (empty($FirstL)) { 
			array_push($errors, "First Language is required"); 
		}
		if (empty($SecondL)) { 
			array_push($errors, "Second Language is required"); 
		}
		if (empty($Idetails)) { 
			array_push($errors, "Interest Details is required"); 
		}
		if (empty($Rdetails)) { 
			array_push($errors, "Reference Details is required"); 
		}
		

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database

			if (isset($_POST['user_type'])) {
				$user_type = e($_POST['user_type']);
				$query = "INSERT INTO users (uID, FirstName, LastName, NRIC, Email, TelephoneNo, user_type, password, website, vision, Uaddress, postalcode, city, region, twitter, instagram, qualification, year, school, grade, Cname, Cdate, Caddress, Cno, Crespon, Adetails, Sdetails, FirstL, SecondL, Idetails, Rdetails) 
						  VALUES('$uID', '$FirstName', '$LastName', '$NRIC', '$Email', '$TelephoneNo', '$user_type', '$password', '$website', '$vision', '$Uaddress', '$postalcode', '$city', '$region', '$twitter', '$instagram', '$qualification', '$year', '$school', '$grade', '$Cname', '$Cdate', '$Caddress', '$Cno', '$Crespon', '$Adetails', '$Sdetails', '$FirstL', '$SecondL', '$Idetails', '$Rdetails')";
				mysqli_query($db, $query);
				$_SESSION['success']  = "New user successfully created!!";
				header('location: user.html');
			}else{
				$query = "INSERT INTO users (uID, FirstName, LastName, NRIC, Email, TelephoneNo, user_type, password, website, vision, Uaddress, postalcode, city, region, twitter, instagram, qualification, year, school, grade, Cname, Cdate, Caddress, Cno, Crespon, Adetails, Sdetails, FirstL, SecondL, Idetails, Rdetails)
						  VALUES('$uID', '$FirstName', '$LastName', '$NRIC', '$Email', '$TelephoneNo' ,'user', '$password', '$website', '$vision', '$Uaddress', '$postalcode', '$city', '$region', '$twitter', '$instagram', '$qualification', '$year', '$school', '$grade', '$Cname', '$Cdate', '$Caddress', '$Cno', '$Crespon', '$Adetails', '$Sdetails', '$FirstL', '$SecondL', '$Idetails', '$Rdetails')";
				mysqli_query($db, $query);

				// get id of the created user
				$logged_in_user_id = mysqli_insert_id($db);

				$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
				$_SESSION['success']  = "You are now logged in";
				header('location: user.html');				
			}

		}

	}

	// return user array from their id
	function getUserById($uID){
		global $db;
		$query = "SELECT * FROM users WHERE uID=" . $uID;
		$result = mysqli_query($db, $query);

		$user = mysqli_fetch_assoc($result);
		return $user;
	}

	// LOGIN USER
	function login(){
		global $db, $Email, $errors;

		// grap form values
		$Email = e($_POST['Email']);
		$password = e($_POST['password']);


		// make sure form is filled properly
		if (empty($Email)) {
			array_push($errors, "Email is required");
		}
		if (empty($password)) {
			array_push($errors, "Password is required");
		}

		// attempt login if no errors on form
		if (count($errors) == 0) {
			$password = md5($password);

			$query = "SELECT * FROM users WHERE Email='$Email' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) { // user found
				// check if user is admin or user
				$logged_in_user = mysqli_fetch_assoc($results);
				if ($logged_in_user['user_type'] == 'admin') {
					session_start();
					
					$_SESSION['user'] = $logged_in_user['uID'];
					$_SESSION['success']  = "You are now logged in";
					header('location: admin/admin.php');		  
				}else{
					session_start();
					$_SESSION['user'] = $logged_in_user['uID'];
					$_SESSION['success']  = "You are now logged in";

					header ('location: user.html');
				}
			}else {
				array_push($errors, "Wrong username/password combination");
			}
		}
	}

	function isLoggedIn()
	{
		if (isset($_SESSION['user'])) {
			return true;
		}else{
			return false;
		}
	}

	function isAdmin()
	{
		if (isset($_SESSION['user']) && $_SESSION['user']['user_type'] == 'admin' ) {
			return true;
		}else{
			return false;
		}
	}

	// escape string
	function e($val){
		global $db;
		return mysqli_real_escape_string($db, trim($val));
	}

	function display_error() {
		global $errors;

		if (count($errors) > 0){
			echo '<div class="error">';
				foreach ($errors as $error){
					echo $error .'<br>';
				}
			echo '</div>';
		}
	}

?>