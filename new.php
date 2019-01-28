<html>
<link rel="stylesheet" href="style.css" style="text/css">
<form action="new.php" method="post">

</style>	
		<script>
		function openNav() {
			document.getElementById("mySidenav").style.width = "250px";
			document.getElementById("main").style.marginLeft = "250px";
		}

		function closeNav() {
			document.getElementById("mySidenav").style.width = "0";
			document.getElementById("main").style.marginLeft= "0";
		}
		</script>
		  
		  <div class="dropdown"><input type="submit" name="submit" value="View details" class="dropbtn"></div>
		   <div class="dropdown"><input type="submit" name="edit" value="Update details" class="dropbtn"></div>
		</div>
		<div class="dropdown"><input type="submit" name="logout" value="User logout" class="dropbtn"></div>
		</div>
		
		
		
</form>

 
<?php
	include('dbcon.php');
	session_start();
	if(isset($_POST['submit'])){
		$userid =$_SESSION['userid'];
		$sql="SELECT * FROM `user` WHERE `userid`='$userid'";
		$result = mysqli_query($con,$sql);
		$data = mysqli_fetch_assoc($result);
		?>
				<head>
				<title>Resume</title>
				<link rel="stylesheet" href="navigation/topnav.css" style="text/css">
				<link href="main.css" rel="stylesheet" type="text/css" />
				<link id="currentCSS" href="defaultColors.css" rel="stylesheet" type="text/css" />
				<div class="topnav">
					<a href="#" onClick="javascript:changeColors('theme_01.css');return false;" 
					id="altColors1" name="submit">First theme</a>
					<a href="#" onClick="javascript:changeColors('theme_02.css');return false;" 
					id="altColors2" name="submit">Second theme</a>
				</div>
				
				<script>
				function changeColors (newCSS)
				{
				  document.getElementById('currentCSS').href = newCSS; 
				}
				</script>
				</head>
				<body>
			
		<div class="header">
 		<img class="photo" src="rapunzel.jpg" alt="logo" style="width: 200px;height: 200px" />
 		<h1><?php echo $data['FirstName'] ." ".$data['LastName']; ?></h1>
	
	</div>	
	<section>
		
		<h3>MY<span>RESUME</span></h3>
			
		<div class="contact">
			<table id="t_contact">
				<tr>
				
					
					<td><strong>Website</strong></td>
					<td><a href="<?php echo $data['website']; ?>" ><?php echo $data['website']; ?></a></td>
				</tr>
				<tr>
					<td><strong>Email</strong></td>
					<td><?php echo $data['Email']; ?></td>
				</tr>
				<tr>
					<td><strong>Phone</strong></td>
					<td><?php echo $data['TelephoneNo']; ?></td>
				</tr>
			</table>
		</div>
		<div class="vision">
			
			<p id="p_mission"><?php echo $data['vision']; ?></p>
		</div>
	
	
				 		<div class="location">
			<h3>&#10063 Location</h3>
			<table class="t_location">
				<tr>
					<td><strong><span>Address</span></strong></td>
					<td><?php echo $data['Uaddress']; ?></td>
				</tr>
				<tr>
					<td><strong><span>Postal Code</span></strong></td>
					<td><?php echo $data['postalcode']; ?></td>
				</tr>
				<tr>
					<td><strong><span>City</span></strong></td>
					<td><?php echo $data['city']; ?></td>
				</tr>
				<tr>
					<td><strong><span>Region</span></strong></td>
					<td><?php echo $data['region']; ?></td>
				</tr>
			</table>
		</div>
		
					<div class="profiles">
			<h3>&#10063 Profiles</h3>
			<table class="t_profiles">
				<tr>
					<th>Twitter</th>
					<th>Instagram</th>
				</tr>
				<tr>
					<td><a href="<?php echo $data['twitter']; ?>" ><?php echo $data['twitter']; ?></a></td>
					<td><a href="<?php echo $data['instagram']; ?>" ><?php echo $data['instagram']; ?></a></td>
				</tr>
			</table>
		</div>
				
	<div class="education">
			<h3>&#10063 Education Background</h3>
			<table class="t_eds">
				<tr>
				    <th>Qualification</th>
				    <th>Year</th>
				    <th>School/College/University</th>
				    <th>Grade/CGPA</th>  
				</tr>
  				<tr>
    				<td><?php echo $data['Fqualification']; ?></td>
   					<td><?php echo $data['Fyear']; ?></td> 
  					<td><?php echo $data['Fschool']; ?></td>
    				<td><?php echo $data['Fgrade']; ?></td>
				</tr>
				<tr>
    				<td><?php echo $data['Squalification']; ?></td>
   					<td><?php echo $data['Syear']; ?></td> 
  					<td><?php echo $data['Sschool']; ?></td>
    				<td><?php echo $data['Sgrade']; ?></td>
				</tr>
				<tr>
    				<td><?php echo $data['Tqualification']; ?></td>
   					<td><?php echo $data['Tyear']; ?></td> 
  					<td><?php echo $data['Tschool']; ?></td>
    				<td><?php echo $data['Tgrade']; ?></td>
				</tr>

			</table>
		</div>
		<div class="works">
			<h3>&#10063 Works</h3>
			<p><strong><?php echo $data['Cname']; ?>   &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  <?php echo $data['Cdate']; ?></strong></p>
			<p><?php echo $data['Caddress']; ?><br>Phone:<?php echo $data['Cno']; ?></p>
			<p>Responsibilities as <span><?php echo $data['Crespon']; ?></span></p>
				<ul>
					<li><?php echo $data['CresponF']; ?></li>
					<li><?php echo $data['CresponS']; ?> </li>
					<li><?php echo $data['CresponT']; ?></li>
					<li><?php echo $data['CresponE']; ?></li>
				</ul>

		</div>
				
						<div class="awards">
			<h3>&#10063 Awards</h3>
			<p><span><?php echo $data['Adetails']; ?></p>

		</div>

		<div class="skills">
			<h3>&#10063 Skills</h3>
			<ul>
				<li><?php echo $data['SdetailsF']; ?></li>
				<li><?php echo $data['SdetailsS']; ?></li>
				<li><?php echo $data['SdetailsT']; ?></li>
			</ul>
		</div>
				
	

				<div class="language">
			<h3>&#10063 Language</h3>
			<p><?php echo $data['FirstL']; ?></p>
			<p><small><emp>Native speaker</emp></small></p>
			<br>
			<p><?php echo $data['SecondL']; ?></p>
			<p><small><emp>Native speaker</emp></small></p>
			<br>
		</div>

		<div class="interest">
			<h3>&#10063 Interests</h3>
			<ul>
				<li><?php echo $data['IdetailsF']; ?></li>
				<li><?php echo $data['IdetailsS']; ?></li>
				<li><?php echo $data['IdetailsT']; ?></li>
				<li><?php echo $data['IdetailsE']; ?></li>
			</ul>
		</div>

		<div class="references">
			<h3>&#10063 References</h3>
			<ol type="1">
				<li><?php echo $data['Rname']; ?></li>
				<p><?php echo $data['Rposition']; ?><br><?php echo $data['Rwork']; ?><br><?php echo $data['Raddress']; ?><br>Tel: <?php echo $data['Rno']; ?><br>Email: <?php echo $data['Remail']; ?></p> 

				<li><?php echo $data['RnameF']; ?></li>
				<p><?php echo $data['RpositionF']; ?><br><?php echo $data['RworkF']; ?><br><?php echo $data['RaddressF']; ?><br>Tel: <?php echo $data['RnoF']; ?><br>Email: <?php echo $data['RemailF']; ?></p> 
			</ol>
		</div>

	</section>
				</body>
			<?php	
			}
		
	
	if(isset($_POST['edit'])){
		$userid =$_SESSION['userid'];
		$sql="SELECT * FROM `user` WHERE `userid`='$userid'";
		$run = mysqli_query($con,$sql);
	
		if($data=mysqli_fetch_assoc($run)){
			?>
			<style>
			#ue{
				text-decoration : none;
				color: white;
				background-color: black;
				font-size: 20px;
				padding: 20px;
				border-radius: 50%;
			
			}
			#ue:hover{
				background-color: grey;
				color: black;
			}
			</style>
			<?php echo "Hi"." ".$data['FirstName']." ".$data['LastName'];?>
			<h3 style="margin-bottom: 50px;">To update your details, please make sure you press the button below....</h3>
			<a id="ue" href="updateform.php?uID=<?php echo $data['userid']; ?>">Edit</a>
			<?php 
			}
		}
	
	if(isset($_POST['logout'])){
		header('location:login.php');
	}
?>
<?php
if(isset($_POST['selqa'])){
	$uID =$_SESSION['uID'];
	$sql="SELECT * FROM `user` WHERE `uID`='$uID'";
		$run = mysqli_query($con,$sql);
		if($data=mysqli_fetch_assoc($run)){
		?>
	<link rel="stylesheet" href="navigation/topnav.css" style="text/css">
	<div class="topnav">
					<a href="viewq.php?uID=<?php echo $data['uID']; ?>">View question</a>
					<a href="addq.php?uID=<?php echo $data['uID']; ?>">Post your question or trouble</a></div>
<?php	
}
}
?>
</html>

