<!doctype html>
<html>
<head>
	<link rel="stylesheet" href="pay.css">
	<link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>
</head>

<body>
	<h1 class="mainhead">Pay now to get your selected item</h1>
	<h3 align="center">Click "Pay Now" to start the transaction</h3>
	<div class="backBtn" align="center" style="margin: 70px;">
	<a href="oStore.php">
		<button>Back to Online Store</button>
	</a>
	</div>
	<div class="payBtn" align ="center" style="margin: 70px;">
		<button id="pay" onclick="document.getElementById('payDetails').style.display='block'">Pay Now</button>
	</div>
	
	<div id="payDetails" class="modal">
		<form class="fillPayment animate">
			<div class="headerForm">
				<span onclick="document.getElementById('payDetails').style.display='none'" class="close" title="Back to Shipping Address">&times;</span>
				<h2 class="formHead">Please Enter Your Payment Details</h2>				
			</div>
			<div class="shipping" >			
				<label>Name</label>
				<input type="text" name="name" required>
				<label>Address</label>
				<input type="text" name="address" required>
				<label>Poscode</label>
				<input type="text" name="poscode" required>
				<label>State</label>
				<input type="text" name="state" required >		
			</div><br>
			<div class="content">
				<label for="name"><strong>Card Holder Name</strong></label>
				<input type="text" name="Enter card holder name" required>
				<label for="card"><strong>Enter Your Card Number</strong></label>
				<input type="text" name="Enter Your Card Number" required>
				<label for="ExpiryDate">Expired Date(MM/YYYY)</label>
				<input type="text" name="MMYYYY" required>
				<label for="ccv">CCV</label>
				<input type="password" name="CCV(3-Digits)" required>
				<label>
				<input type="checkbox" checked="checked" name="confirm" required>I confirm every details are true
				</label>
				<button type="submit">Confirm</button>
			</div>
			<div class="content" style="background-color: gray">
				<button type="submit" onclick="success()" class="cancelbtn">Proceed</button>
				<button type="button" onclick="document.getElementById('payDetails').style.display = 'none'" class="cancelbtn">Cancel</button>
			</div>
		</form>
		
	</div>
	<script>
		var modal = document.getElementById('payDetails');

		window.onclick = function(event){
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
		function success(){
			alert("Payment is success. The item(s) will be deliver soon.")
		}
	</script>

</body>
</html>