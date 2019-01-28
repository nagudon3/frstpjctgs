<!DOCTYPE html>
<html>
<head>
	<title>Proofreader Service</title>
	<link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="proof.css">
</head>
<body>
	<section>
	<div class="payment">
	<h1 align="center">Please Make Your Payment to Proceed with Proofreader Services<h1>
	<form class="fillPayment animate">
		<div class="headerForm">
			<h2 class="formHead" align="center">Please Enter Your Payment Details</h2>
			<p align="center">Proof Reader Menu will Open Once You Click on the "Proceed to Proofreader Services" button</p>				
		</div>
		<div class="content" align="center">
			<label for="name"><strong>Card Holder Name</strong></label>
			<input type="text" name="Enter card holder name" required>
			<label for="card"><strong>Enter Your Card Number</strong></label>
			<input type="text" name="Enter Your Card Number" required>
			<label for="ExpiryDate">Expired Date(MM/YYYY)</label>
			<input type="text" name="MMYYYY" required>
			<label for="ccv">CCV</label>
			<input type="password" name="CCV(3-Digits)" required>
			<label>
			<input type="checkbox" checked="checked" name="confirm" required> I confirm every details are true
			</label><br>
			<button id="confirm">Done</button>
		</div>
	</form>
	</div>
	<div class="payBtn" align ="center" style="margin: 70px;">
		<button id="pay" onclick="document.getElementById('proofReader').style.display='block'">Proceed to Proofreader Services</button>
	</div>	
	<div id="proofReader" class="modal">
		<form class="proof animate">
			<div class="headerForm">
				<span onclick="document.getElementById('proofReader').style.display='none'" class="close" title="close">&times;</span>
				<h2 class="formHead">Please Enter Your Details & Upload Your Resume</h2>				
			</div>
			<div class="content">
				<label for="name"><strong>Name</strong></label>
				<input type="text" name="name" required>
				<label for="card"><strong>Contact Number</strong></label>
				<input type="text" name="contact" required>
				<label for="ExpiryDate">Email</label>
				<input type="text" name="email" required>
				<label for="ccv">Choose a file</label>
				<input type="file" name="resume" required><br>
				<button type="submit" onclick="success()">Confirm</button>
			</div>
			<div>
				<button type="button" onclick="document.getElementById('proofReader').style.display = 'none'" class="cancelbtn">Cancel</button>
			</div>
		</form>
		
	</div>
	<script>
		var modal = document.getElementById('proofReader');

		window.onclick = function(event){
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
		function success(){
			alert("Email sent. Your Resume will be reviewed soon. Once we are done, we will notify you.")
		}
	</script>

</section>
</body>
</html>