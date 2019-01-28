<?php
	if(isset($_POST['submit'])){
		include('dbcon.php');
		$FirstName = $_POST['FirstName'];
		$LastName = $_POST['LastName'];
		$NRIC = $_POST['NRIC'];
		$userid = $_POST['userid'];
		$Email = $_POST['Email'];
		$password = $_POST['password'];
		$TelephoneNo = $_POST['TelephoneNo'];
		$website = $_POST['website'];
		$vision = $_POST['vision'];
		$Uaddress = $_POST['Uaddress'];
		$postalcode = $_POST['postalcode'];
		$city = $_POST['city'];
		$region = $_POST['region'];
		$twitter = $_POST['twitter'];
		$instagram = $_POST['instagram'];
		$Fqualification = $_POST['Fqualification'];
		$Fyear = $_POST['Fyear'];
		$Fschool = $_POST['Fschool'];
		$Fgrade = $_POST['Fgrade'];
		$Squalification = $_POST['Squalification'];
		$Syear = $_POST['Syear'];
		$Sschool = $_POST['Sschool'];
		$Sgrade = $_POST['Sgrade'];
		$Tqualification = $_POST['Tqualification'];
		$Tyear = $_POST['Tyear'];
		$Tschool = $_POST['Tschool'];
		$Tgrade = $_POST['Tgrade'];
		$Cname = $_POST['Cname'];
		$Cdate = $_POST['Cdate'];
		$Caddress = $_POST['Caddress'];
		$Cno = $_POST['Cno'];
		$Crespon = $_POST['Crespon'];
		$CresponF = $_POST['CresponF'];
		$CresponS = $_POST['CresponS'];
		$CresponT = $_POST['CresponT'];
		$CresponE = $_POST['CresponE'];
		$Adetails = $_POST['Adetails'];
		$SdetailsF = $_POST['SdetailsF'];
		$SdetailsS = $_POST['SdetailsS'];
		$SdetailsT = $_POST['SdetailsT'];
		$FirstL = $_POST['FirstL'];
		$SecondL = $_POST['SecondL'];
		$IdetailsF = $_POST['IdetailsF'];
		$IdetailsS = $_POST['IdetailsS'];
		$IdetailsT = $_POST['IdetailsT'];
		$IdetailsE = $_POST['IdetailsE'];
		$Rname = $_POST['Rname'];
		$Rposition = $_POST['Rposition'];
		$Rwork = $_POST['Rwork'];
		$Raddress = $_POST['Raddress'];
		$Rno = $_POST['Rno'];
		$Remail = $_POST['Remail'];
		$RnameF = $_POST['RnameF'];
		$RpositionF = $_POST['RpositionF'];
		$RworkF = $_POST['RworkF'];
		$RaddressF = $_POST['RaddressF'];
		$RnoF = $_POST['RnoF'];
		$RemailF = $_POST['RemailF'];
		
		$qry = "INSERT INTO users (userid, FirstName, LastName, Email, NRIC, password, website, vision,TelephoneNo, Uaddress, postalcode, city, region, twitter, instagram, Fqualification, Fyear, Fschool, Fgrade,Squalification, Syear, Sschool, Sgrade,Tqualification, Tyear, Tschool, Tgrade, Cname, Cdate, Caddress, Cno, Crespon, CresponF, CresponS, CresponT, CresponE, Adetails, SdetailsF, SdetailsS, SdetailsT, FirstL, SecondL, IdetailsF, IdetailsS, IdetailsT, IdetailsE, Rname, Rposition, Rwork, Raddress, Rno, Remail, RnameF, RpositionF, RworkF, RaddressF, RnoF, RemailF) 
						  VALUES('$userid', '$FirstName', '$LastName', '$Email', '$NRIC', '$password', '$website', '$vision','$TelephoneNo', '$Uaddress', '$postalcode', '$city', '$region', '$twitter', '$instagram', '$Fqualification', '$Fyear', '$Fschool', '$Fgrade', '$Squalification', '$Syear', '$Sschool', '$Sgrade', '$Tqualification', '$Tyear', '$Tschool', '$Tgrade', '$Cname', '$Cdate', '$Caddress', '$Cno', '$Crespon', '$CresponF', '$CresponS', '$CresponT', '$CresponE', '$Adetails', '$SdetailsF', '$SdetailsS', '$SdetailsT', '$FirstL', '$SecondL', '$IdetailsF', '$IdetailsS', '$IdetailsT', '$IdetailsE', '$Rname', '$Rposition', '$Rwork', '$Raddress', '$Rno', '$Remail', '$RnameF', '$RpositionF', '$RworkF', '$RaddressF', '$RnoF', '$RemailF')";
		$run= mysqli_query($con,$qry);


	{
			?>
			<script>alert('Registered Successfully...');
			location.replace('login.php');
			</script>
			<?php
		}
	}
?>


<html>
<head>
	<title>Registration system PHP and MySQL</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php " enctype="multipart/form-data">
	<fieldset>
		<legend>Personal Details</legend>
		<div class="input-group">
			<label>User ID</label>
			<input type="text" name="userid" placeholder="Enter generated id" required>
		</div>
		<div class="input-group">
			<label>First Name</label>
			<input type="text" name="FirstName" placeholder="Enter Your First Name" required>
		</div>
		<div class="input-group">
			<label>Last Name</label>
			<input type="text" name="LastName" placeholder="Enter Your Last Name" required>
		</div>
		<div class="input-group">
			<label>NRIC</label>
			<input type="text" name="NRIC" placeholder="Enter Your NRIC" required>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="Email" placeholder="Enter Your Email" required>
		</div>
		<div class="input-group">
			<label>Telephone Number</label>
			<input type="text" name="TelephoneNo" placeholder="Enter Your Email" required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password" placeholder="Enter password" required>
		</div>
		<div class="input-group">
			<label>Website</label>
			<input type="text" name="website" placeholder="Enter Your Website Name" required>
		</div>
		<div class="input-group">
			<label>Vision</label>
			<textarea rows="8" cols="60"name="vision" placeholder="Your Vision" required></textarea>
		</div>
	</fieldset>
		
		
	<fieldset>
		<legend>Location</legend>
		
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="Uaddress" placeholder="Enter Your Address">
		</div>
		<div class="input-group">
			<label>Postal Code</label>
			<input type="text" name="postalcode" placeholder="Enter Your City Postal Code">
		</div>
		<div class="input-group">
			<label>City</label>
			<input type="text" name="city" placeholder="Enter Your City">
		</div>
		<div class="input-group">
			<label>Region</label>
			<input type="text" name="region" placeholder="Enter Your Region">
		</div>
	</fieldset>
		
		
	<fieldset>
			<legend>Profile</legend>
		
		<div class="input-group">
			<label>Twitter</label>
			<input type="text" name="twitter" placeholder="Enter Your Twiiter Link">
		</div>
		<div class="input-group">
			<label>Instagram</label>
			<input type="text" name="instagram" placeholder="Enter Your Instagram Link">
		</div>
	</fieldset>
	
	
	
	<fieldset>
		<legend>Education Background</legend>
		
		<div class="input-group">
			<label>Latest Qualification</label>
			<input type="text" name="Fqualification" placeholder="Enter Your First Qualification">
		</div>
		<div class="input-group">
			<label>Year</label>
			<input type="text" name="Fyear" placeholder="E.G. 2012-2014">
		</div>
		<div class="input-group">
			<label>School/College/University</label>
			<input type="text" name="Fschool" placeholder="Enter Your School/College/University">
		</div>
		<div class="input-group">
			<label>Grade</label>
			<input type="text" name="Fgrade" placeholder="Enter Your CGPA">
		</div>
		
		<div class="input-group">
			<label>Second Qualification</label>
			<input type="text" name="Squalification" placeholder="Enter Your Qualification">
		</div>
		<div class="input-group">
			<label>Year</label>
			<input type="text" name="Syear" placeholder="E.G. 2012-2014">
		</div>
		<div class="input-group">
			<label>School/College/University</label>
			<input type="text" name="Sschool" placeholder="Enter Your School/College/University">
		</div>
		<div class="input-group">
			<label>Grade</label>
			<input type="text" name="Sgrade" placeholder="Enter Your CGPA">
		</div>
		
		<div class="input-group">
			<label>Third Qualification</label>
			<input type="text" name="Tqualification" placeholder="Enter Your Qualification">
		</div>
		<div class="input-group">
			<label>Year</label>
			<input type="text" name="Tyear" placeholder="E.G. 2012-2014">
		</div>
		<div class="input-group">
			<label>School/College/University</label>
			<input type="text" name="Tschool" placeholder="Enter Your School/College/University">
		</div>
		<div class="input-group">
			<label>Grade</label>
			<input type="text" name="Tgrade" placeholder="Enter Your CGPA">
		</div>
	</fieldset>
	
	
	<fieldset>
		<legend>Works Experience</legend>
		
		<div class="input-group">
			<label>Company Name</label>
			<input type="text" name="Cname" placeholder="Enter Company Name">
		</div>
		<div class="input-group">
			<label>Date Of Working</label>
			<input type="text" name="Cdate"  placeholder="E.G. Feb 2012-2014">
		</div>
		<div class="input-group">
			<label>Company Address</label>
			<input type="text" name="Caddress"  placeholder="Enter Company Address">
		</div>
		<div class="input-group">
			<label>Company Number</label>
			<input type="text" name="Cno"  placeholder="Enter Company Number">
		</div>
		<div class="input-group">
			<label>Responsible as </label>
			<input type="text" name="Crespon"  placeholder="Enter your responsibility">
		</div>
		
		<div class="input-group">
			<label>Responsibilities </label>
			<input type="text" name="CresponF"  placeholder="Enter Responsibilities">
		</div>
		
		<div class="input-group">
			<label>Responsibilities </label>
			<input type="text" name="CresponS" " placeholder="Enter Responsibilities">
		</div>
		
		<div class="input-group">
			<label>Responsibilities </label>
			<input type="text" name="CresponT"  placeholder="Enter Responsibilities">
		</div>
		<div class="input-group">
			<label>Responsibilities </label>
			<input type="text" name="CresponE"  placeholder="Enter Responsibilities">
		</div>
	</fieldset>
	
	
	<fieldset>
			<legend>Awards</legend>
		
		<div class="input-group">
			<label>Award Details</label>
			<input type="text" name="Adetails"  placeholder="Enter Your Award Details">
		</div>
	</fieldset>
	
	
	<fieldset>
			<legend>Skills</legend>
		
		<div class="input-group">
			<label>First Skill Details</label>
			<input type="text" name="SdetailsF"  placeholder="Enter Your Skill Details">
		</div>
		<div class="input-group">
			<label>Second Skill Details</label>
			<input type="text" name="SdetailsS"  placeholder="Enter Your Skill Details">
		</div>
		<div class="input-group">
			<label>Third Skill Details</label>
			<input type="text" name="SdetailsT"  placeholder="Enter Your Skill Details">
		</div>
		
	</fieldset>
	
	
	<fieldset>
			<legend>Language</legend>
		
		<div class="input-group">
			<label>First Language</label>
			<input type="text" name="FirstL"  placeholder="Enter Your First Language">
		</div>
		<div class="input-group">
			<label>Second Language</label>
			<input type="text" name="SecondL"  placeholder="Enter Your Second Language">
		</div>
	</fieldset>
	
	
	<fieldset>
			<legend>Interests</legend>
		
		<div class="input-group">
			<label>First Interest Details</label>
			<input type="text" name="IdetailsF"  placeholder="Enter Your Interest Details">
		</div>
		<div class="input-group">
			<label>Second Interest Details</label>
			<input type="text" name="IdetailsS"  placeholder="Enter Your Interest Details">
		</div>
		<div class="input-group">
			<label>Third Interest Details</label>
			<input type="text" name="IdetailsT"  placeholder="Enter Your Interest Details">
		</div>
		<div class="input-group">
			<label>Fourth Interest Details</label>
			<input type="text" name="IdetailsE"  placeholder="Enter Your Interest Details">
		</div>
	</fieldset>
	
	
	<fieldset>
			<legend>References</legend>
		
		<div class="input-group">
			<label>Reference Name</label>
			<input type="text" name="Rname"  placeholder="Enter Your Reference Details">
		</div>
		<div class="input-group">
			<label>Reference Position</label>
			<input type="text" name="Rposition"  placeholder="Enter Your Reference Details">
		</div>
		<div class="input-group">
			<label>Reference Workplace</label>
			<input type="text" name="Rwork"  placeholder="Enter Your Reference Details">
		</div>
		<div class="input-group">
			<label>Reference Address</label>
			<input type="text" name="Raddress" placeholder="Enter Your Reference Details">
		</div>
		<div class="input-group">
			<label>Reference Number</label>
			<input type="text" name="Rno"  placeholder="Enter Your Reference Details">
		</div>
		<div class="input-group">
			<label>Reference Email</label>
			<input type="text" name="Remail"  placeholder="Enter Your Reference Details">
		</div>
		
		<div class="input-group">
			<label>Second Reference Name</label>
			<input type="text" name="RnameF" placeholder="Enter Your Reference Details">
		</div>
		<div class="input-group">
			<label>Second Reference Position</label>
			<input type="text" name="RpositionF"  placeholder="Enter Your Reference Details">
		</div>
		<div class="input-group">
			<label>Second Reference Workplace</label>
			<input type="text" name="RworkF"  placeholder="Enter Your Reference Details">
		</div>
		<div class="input-group">
			<label>Second Reference Address</label>
			<input type="text" name="RaddressF"  placeholder="Enter Your Reference Details">
		</div>
		<div class="input-group">
			<label>Second Reference Number</label>
			<input type="text" name="RnoF"  placeholder="Enter Your Reference Details">
		</div>
		<div class="input-group">
			<label>Second Reference Email</label>
			<input type="text" name="RemailF"  placeholder="Enter Your Reference Details">
		</div>
	</fieldset>
		
		
		
		
		<div class="input-group">
				<input type='submit' name='submit' value="Register">
		</div>
		
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</body>
</html>
<?php
	if(isset($_POST['submit'])){
		include('dbcon.php');
		$FirstName = $_POST['FirstName'];
		$LastName = $_POST['LastName'];
		$NRIC = $_POST['NRIC'];
		$userid = $_POST['userid'];
		$Email = $_POST['Email'];
		$password = $_POST['password'];
		$TelephoneNo = $_POST['TelephoneNo'];
		$website = $_POST['website'];
		$vision = $_POST['vision'];
		$Uaddress = $_POST['Uaddress'];
		$postalcode = $_POST['postalcode'];
		$city = $_POST['city'];
		$region = $_POST['region'];
		$twitter = $_POST['twitter'];
		$instagram = $_POST['instagram'];
		$Fqualification = $_POST['Fqualification'];
		$Fyear = $_POST['Fyear'];
		$Fschool = $_POST['Fschool'];
		$Fgrade = $_POST['Fgrade'];
		$Squalification = $_POST['Squalification'];
		$Syear = $_POST['Syear'];
		$Sschool = $_POST['Sschool'];
		$Sgrade = $_POST['Sgrade'];
		$Tqualification = $_POST['Tqualification'];
		$Tyear = $_POST['Tyear'];
		$Tschool = $_POST['Tschool'];
		$Tgrade = $_POST['Tgrade'];
		$Cname = $_POST['Cname'];
		$Cdate = $_POST['Cdate'];
		$Caddress = $_POST['Caddress'];
		$Cno = $_POST['Cno'];
		$Crespon = $_POST['Crespon'];
		$CresponF = $_POST['CresponF'];
		$CresponS = $_POST['CresponS'];
		$CresponT = $_POST['CresponT'];
		$CresponE = $_POST['CresponE'];
		$Adetails = $_POST['Adetails'];
		$SdetailsF = $_POST['SdetailsF'];
		$SdetailsS = $_POST['SdetailsS'];
		$SdetailsT = $_POST['SdetailsT'];
		$FirstL = $_POST['FirstL'];
		$SecondL = $_POST['SecondL'];
		$IdetailsF = $_POST['IdetailsF'];
		$IdetailsS = $_POST['IdetailsS'];
		$IdetailsT = $_POST['IdetailsT'];
		$IdetailsE = $_POST['IdetailsE'];
		$Rname = $_POST['Rname'];
		$Rposition = $_POST['Rposition'];
		$Rwork = $_POST['Rwork'];
		$Raddress = $_POST['Raddress'];
		$Rno = $_POST['Rno'];
		$Remail = $_POST['Remail'];
		$RnameF = $_POST['RnameF'];
		$RpositionF = $_POST['RpositionF'];
		$RworkF = $_POST['RworkF'];
		$RaddressF = $_POST['RaddressF'];
		$RnoF = $_POST['RnoF'];
		$RemailF = $_POST['RemailF'];
		
		$qry = "INSERT INTO user (userid, FirstName, LastName, Email, NRIC, password, website, vision, TelephoneNo, Uaddress, postalcode, city, region, twitter, instagram, Fqualification, Fyear, Fschool, Fgrade,Squalification, Syear, Sschool, Sgrade, Tqualification, Tyear, Tschool, Tgrade, Cname, Cdate, Caddress, Cno, Crespon, CresponF, CresponS, CresponT, CresponE, Adetails, SdetailsF, SdetailsS, SdetailsT, FirstL, SecondL, IdetailsF, IdetailsS, IdetailsT, IdetailsE, Rname, Rposition, Rwork, Raddress, Rno, Remail, RnameF, RpositionF, RworkF, RaddressF, RnoF, RemailF) 
						  VALUES('$userid', '$FirstName', '$LastName', '$Email', '$NRIC', '$password', '$website', '$vision','$TelephoneNo', '$Uaddress', '$postalcode', '$city', '$region', '$twitter', '$instagram', '$Fqualification', '$Fyear', '$Fschool', '$Fgrade', '$Squalification', '$Syear', '$Sschool', '$Sgrade', '$Tqualification', '$Tyear', '$Tschool', '$Tgrade', '$Cname', '$Cdate', '$Caddress', '$Cno', '$Crespon', '$CresponF', '$CresponS', '$CresponT', '$CresponE', '$Adetails', '$SdetailsF', '$SdetailsS', '$SdetailsT', '$FirstL', '$SecondL', '$IdetailsF', '$IdetailsS', '$IdetailsT', '$IdetailsE', '$Rname', '$Rposition', '$Rwork', '$Raddress', '$Rno', '$Remail', '$RnameF', '$RpositionF', '$RworkF', '$RaddressF', '$RnoF', '$RemailF')";
		
		$result = mysqli_query($con, $qry);


	{
			?>
			<script>alert('Registered Successfully...');
			location.replace('login.php');
			</script>
			<?php
		}
	}
?>