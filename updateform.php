
<?php
	 include('dbcon.php');
	 $userid = $_GET['uID'];
	 $sql="SELECT * FROM `user` WHERE `userid`='$userid'";
	 $result=mysqli_query($con,$sql);
	 $data=mysqli_fetch_assoc($result);
?>
<html>
<form method="post" action="updateform.php" enctype="multipart/form-data">
<body>
	<div class="header">
		<h2>Register</h2>
	</div>
	
	<form method="post" action="register.php " enctype="multipart/form-data">
	<fieldset>
		<legend>Personal Details</legend>
		
		<div class="input-group">
			<label>First Name</label>
			<input type="text" name="FirstName" value="<?php echo $data['FirstName']; ?>" required>
		</div>
		<div class="input-group">
			<label>Last Name</label>
			<input type="text" name="LastName" value="<?php echo $data['LastName']; ?>" required>
		</div>
		<div class="input-group">
			<label>NRIC</label>
			<input type="text" name="NRIC" value="<?php echo $data['NRIC']; ?>" required>
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="text" name="Email" value="<?php echo $data['Email']; ?>" required>
		</div>
		<div class="input-group">
			<label>Telephone Number</label>
			<input type="text" name="TelephoneNo" value="<?php echo $data['TelephoneNo']; ?>" required>
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="text" name="password" value="<?php echo $data['password']; ?>" required>
		</div>
		<div class="input-group">
			<label>Website</label>
			<input type="text" name="website" value="<?php echo $data['website']; ?>" required>
		</div>
		<div class="input-group">
			<label>Vision</label>
			<textarea rows="8" cols="60"name="vision" value="<?php echo $data['vision']; ?>" required></textarea>
		</div>
	</fieldset>
		
		
	<fieldset>
		<legend>Location</legend>
		
		<div class="input-group">
			<label>Address</label>
			<input type="text" name="Uaddress" value="<?php echo $data['Uaddress']; ?>">
		</div>
		<div class="input-group">
			<label>Postal Code</label>
			<input type="text" name="postalcode" value="<?php echo $data['postalcode']; ?>">
		</div>
		<div class="input-group">
			<label>City</label>
			<input type="text" name="city" value="<?php echo $data['city']; ?>"">
		</div>
		<div class="input-group">
			<label>Region</label>
			<input type="text" name="region" value="<?php echo $data['region']; ?>">
		</div>
	</fieldset>
		
		
	<fieldset>
			<legend>Profile</legend>
		
		<div class="input-group">
			<label>Twitter</label>
			<input type="text" name="twitter" value="<?php echo $data['twitter']; ?>">
		</div>
		<div class="input-group">
			<label>Instagram</label>
			<input type="text" name="instagram" value="<?php echo $data['instagram']; ?>">
		</div>
	</fieldset>
	
	
	
	<fieldset>
		<legend>Education Background</legend>
		
		<div class="input-group">
			<label>Latest Qualification</label>
			<input type="text" name="Fqualification" value="<?php echo $data['Fqualification']; ?>">
		</div>
		<div class="input-group">
			<label>Year</label>
			<input type="text" name="Fyear" value="<?php echo $data['Fyear']; ?>">
		</div>
		<div class="input-group">
			<label>School/College/University</label>
			<input type="text" name="Fschool" value="<?php echo $data['Fschool']; ?>">
		</div>
		<div class="input-group">
			<label>Grade</label>
			<input type="text" name="Fgrade" value="<?php echo $data['Fgrade']; ?>">
		</div>
		
		<div class="input-group">
			<label>Second Qualification</label>
			<input type="text" name="Squalification" value="<?php echo $data['Squalification']; ?>">
		</div>
		<div class="input-group">
			<label>Year</label>
			<input type="text" name="Syear" value="<?php echo $data['Syear']; ?>">
		</div>
		<div class="input-group">
			<label>School/College/University</label>
			<input type="text" name="Sschool" value="<?php echo $data['Sschool']; ?>">
		</div>
		<div class="input-group">
			<label>Grade</label>
			<input type="text" name="Sgrade" value="<?php echo $data['Sgrade']; ?>">
		</div>
		
		<div class="input-group">
			<label>Third Qualification</label>
			<input type="text" name="Tqualification" value="<?php echo $data['Tqualification']; ?>">
		</div>
		<div class="input-group">
			<label>Year</label>
			<input type="text" name="Tyear" value="<?php echo $data['Tyear']; ?>">
		</div>
		<div class="input-group">
			<label>School/College/University</label>
			<input type="text" name="Tschool" value="<?php echo $data['Tschool']; ?>">
		</div>
		<div class="input-group">
			<label>Grade</label>
			<input type="text" name="Tgrade" value="<?php echo $data['Tgrade']; ?>">
		</div>
	</fieldset>
	
	
	<fieldset>
		<legend>Works Experience</legend>
		
		<div class="input-group">
			<label>Company Name</label>
			<input type="text" name="Cname" value="<?php echo $data['Cname']; ?>">
		</div>
		<div class="input-group">
			<label>Date Of Working</label>
			<input type="text" name="Cdate"  value="<?php echo $data['Cdate']; ?>">
		</div>
		<div class="input-group">
			<label>Company Address</label>
			<input type="text" name="Caddress"  value="<?php echo $data['Caddress']; ?>">
		</div>
		<div class="input-group">
			<label>Company Number</label>
			<input type="text" name="Cno"  value="<?php echo $data['Cno']; ?>">
		</div>
		<div class="input-group">
			<label>Responsible as </label>
			<input type="text" name="Crespon"  value="<?php echo $data['Crespon']; ?>">
		</div>
		
		<div class="input-group">
			<label>Responsibilities </label>
			<input type="text" name="CresponF"  value="<?php echo $data['CresponF']; ?>">
		</div>
		
		<div class="input-group">
			<label>Responsibilities </label>
			<input type="text" name="CresponS" value="<?php echo $data['CresponS']; ?>">
		</div>
		
		<div class="input-group">
			<label>Responsibilities </label>
			<input type="text" name="CresponT"  value="<?php echo $data['CresponT']; ?>">
		</div>
		<div class="input-group">
			<label>Responsibilities </label>
			<input type="text" name="CresponE"  value="<?php echo $data['CresponE']; ?>">
		</div>
	</fieldset>
	
	
	<fieldset>
			<legend>Awards</legend>
		
		<div class="input-group">
			<label>Award Details</label>
			<input type="text" name="Adetails"  value="<?php echo $data['Adetails']; ?>">
		</div>
	</fieldset>
	
	
	<fieldset>
			<legend>Skills</legend>
		
		<div class="input-group">
			<label>First Skill Details</label>
			<input type="text" name="SdetailsF"  value="<?php echo $data['SdetailsF']; ?>">
		</div>
		<div class="input-group">
			<label>Second Skill Details</label>
			<input type="text" name="SdetailsS"  value="<?php echo $data['SdetailsS']; ?>">
		</div>
		<div class="input-group">
			<label>Third Skill Details</label>
			<input type="text" name="SdetailsT"  value="<?php echo $data['SdetailsT']; ?>">
		</div>
		
	</fieldset>
	
	
	<fieldset>
			<legend>Language</legend>
		
		<div class="input-group">
			<label>First Language</label>
			<input type="text" name="FirstL"  value="<?php echo $data['FirstL']; ?>">
		</div>
		<div class="input-group">
			<label>Second Language</label>
			<input type="text" name="SecondL" value="<?php echo $data['SecondL']; ?>">
		</div>
	</fieldset>
	
	
	<fieldset>
			<legend>Interests</legend>
		
		<div class="input-group">
			<label>First Interest Details</label>
			<input type="text" name="IdetailsF"  value="<?php echo $data['IdetailsF']; ?>">
		</div>
		<div class="input-group">
			<label>Second Interest Details</label>
			<input type="text" name="IdetailsS" value="<?php echo $data['IdetailsS']; ?>">
		</div>
		<div class="input-group">
			<label>Third Interest Details</label>
			<input type="text" name="IdetailsT"  value="<?php echo $data['IdetailsT']; ?>">
		</div>
		<div class="input-group">
			<label>Fourth Interest Details</label>
			<input type="text" name="IdetailsE"  value="<?php echo $data['IdetailsE']; ?>">
		</div>
	</fieldset>
	
	
	<fieldset>
			<legend>References</legend>
		
		<div class="input-group">
			<label>Reference Name</label>
			<input type="text" name="Rname"  value="<?php echo $data['Rname']; ?>">
		</div>
		<div class="input-group">
			<label>Reference Position</label>
			<input type="text" name="Rposition"  value="<?php echo $data['Rposition']; ?>">
		</div>
		<div class="input-group">
			<label>Reference Workplace</label>
			<input type="text" name="Rwork"  value="<?php echo $data['Rwork']; ?>">
		</div>
		<div class="input-group">
			<label>Reference Address</label>
			<input type="text" name="Raddress" value="<?php echo $data['Raddress']; ?>">
		</div>
		<div class="input-group">
			<label>Reference Number</label>
			<input type="text" name="Rno"  value="<?php echo $data['Rno']; ?>">
		</div>
		<div class="input-group">
			<label>Reference Email</label>
			<input type="text" name="Remail"  value="<?php echo $data['Remail']; ?>">
		</div>
		
		<div class="input-group">
			<label>Second Reference Name</label>
			<input type="text" name="RnameF" value="<?php echo $data['RnameF']; ?>">
		</div>
		<div class="input-group">
			<label>Second Reference Position</label>
			<input type="text" name="RpositionF"  value="<?php echo $data['RpositionF']; ?>">
		</div>
		<div class="input-group">
			<label>Second Reference Workplace</label>
			<input type="text" name="RworkF"  value="<?php echo $data['RworkF']; ?>">
		</div>
		<div class="input-group">
			<label>Second Reference Address</label>
			<input type="text" name="RaddressF"  value="<?php echo $data['RaddressF']; ?>">
		</div>
		<div class="input-group">
			<label>Second Reference Number</label>
			<input type="text" name="RnoF"  value="<?php echo $data['RnoF']; ?>">
		</div>
		<div class="input-group">
			<label>Second Reference Email</label>
			<input type="text" name="RemailF"  value="<?php echo $data['RemailF']; ?>">
		</div>
	</fieldset>
		
	<tr>
	<td><input type="hidden" name="userid" value="<?php echo $data['userid']; ?>" required></td>
	</tr>
	<tr><td><input type='submit' name='submit' value="Update"></td></tr>
	<a href="user.php">home</a>
	</body>
</form>
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
		
		$qry="UPDATE `user` SET `FirstName`='$FirstName',`LastName`='$LastName',`NRIC`='$NRIC',`Email`='$Email',`TelephoneNo`='$TelephoneNo',`password`='$password', 
		`userid`= '$userid', `website`= '$website', `vision`= '$vision', `Uaddress`= '$Uaddress', `postalcode`= '$postalcode', `city`= '$city', `region`= '$region',
		`twitter`= '$twitter', `instagram`= '$instagram', `Fqualification`= '$Fqualification', `Fyear`= '$Fyear', `Fschool`= '$Fschool', `Fgrade`= '$Fgrade',
		`Squalification`= '$Squalification', `Syear`= '$Syear', `Sschool`= '$Sschool', `Sgrade`= '$Sgrade', `Tqualification`= '$Tqualification', `Tyear`= '$Tyear',
		 `Tschool`= '$Tschool', `Tgrade`= '$Tgrade', `Cname`= '$Cname', `Cdate`= '$Cdate', `Caddress`= '$Caddress', `Cno`= '$Cno', `Crespon`= '$Crespon',
		 `CresponF`= '$CresponF', `CresponS`= '$CresponS', `CresponT`= '$CresponT', `CresponE`= '$CresponE', `Adetails`= '$Adetails', `SdetailsF`= '$SdetailsF', `SdetailsS`= '$SdetailsS',
		 `SdetailsT`= '$SdetailsT', `FirstL`= '$FirstL', `SecondL`= '$SecondL', `IdetailsF`= '$IdetailsF', `IdetailsS`= '$IdetailsS', `IdetailsT`= '$IdetailsT', `IdetailsE`= '$IdetailsE',
		 `Rname`= '$Rposition', `Rwork`= '$Rwork', `Raddress`= '$Raddress', `Rno`= '$Rno', `Remail`= '$Remail', `RnameF`= '$RnameF', `RpositionF`= '$RpositionF', `RworkF`= '$RworkF', `RaddressF`= '$RaddressF',
		 `RnoF`= '$RnoF', `RemailF`= '$RemailF' WHERE `userid`= '$userid';";
		$result= mysqli_query($con,$qry);
		
		
			?>
			<script>
				alert('Data updated Sucessfully');
				location.replace('new.php');
				//window.open('updateform.php?userid=<?php echo $userid; ?>','_self');
			</script>
			<?php
		
		}
?>
