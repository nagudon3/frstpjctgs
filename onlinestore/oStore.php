<!DOCTYPE html>
<html>
	<head>
	
		<title>Online Store</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="details.css">
		<link href='https://fonts.googleapis.com/css?family=Actor' rel='stylesheet'>
	</head>
	<body>
	<?php include("initialise.php");?>
	<section>
		<h1 align="center">Our Online Store</h3><br />
		<h2 align="center">We provide some product that might help you</h4>
		<?php
			$query = "SELECT * FROM tbl_product";
			$result = mysqli_query($connect, $query);
			
			if(mysqli_num_rows($result) > 0)
			{
				while($row = mysqli_fetch_array($result))
			{
			?>

			<div class="abc">
			<form class="viewProduct" method="post" action="oStore.php?action=add&id=<?php echo $row["id"]; ?>">
				<div class="image">
					<img src="images/<?php echo $row["image"]; ?>"  /><br />
				</div>
				<div class="content">
					<label>Name:</label>
					<p><?php echo $row["name"]; ?></p>
					<label>Price:</label>
					<p>RM <?php echo $row["price"]; ?></p>
					<label>Description:</label>
					<p><?php echo $row["description"]; ?></p>
					<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
					<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
				</div>
				<div class="addBtn">
					<input type="submit" name="add" style="margin-top:5px; background-color: orange; border:1px solid black; border-radius: 25px;" value="Add to cart" />
				</div>
			</form>
		</div>
		
		<?php
				}
			}
		?>
			
			
			<br />
			<div id ="myModal" class="modal">
			
			<div class="modal-content">
			
			<div class = "modal-header">
			<span class="close">&times;</span>
			<h3>What is in the Cart?</h3>
			</div>
			
			<div class="modal-body">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="20%">Price</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td><a href="oStore.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger"><button>Remove</button></span></a></td>
					</tr>
					<?php
							$total = $total + $values["item_price"];
						}
					?>
					<tr>
						<td colspan="2" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
					</tr>
					<?php
					}
					?>
						
				</table>
				<br>
				<div align="center" class="proceedbtn" style="position: fixed;" >
				<a href="payment.php">
					<button>Proceed to Payment</button>
				</a>
			</div>
			</div>	
			
			</div>
		</div>
		<div class="buttonCart">
			<button  id="myBtn">See Cart</button>
		</div>
		<script>

			var modal = document.getElementById('myModal');


			var btn = document.getElementById("myBtn");


			var span = document.getElementsByClassName("close")[0];


			btn.onclick = function() {
				modal.style.display = "block";
			}


		span.onclick = function() {
			modal.style.display = "none";
		}


		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
		}
	}
		</script>
	<br />
	</section>
	</body>
</html>