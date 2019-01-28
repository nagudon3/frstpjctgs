<?php 
		session_start();
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "webbased";

		$connect = mysqli_connect($servername, $username, $password, $dbname);
		
		if(isset($_POST["add"]))
		{
				if(isset($_SESSION["shopping_cart"]))
				{
					$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
					if(!in_array($_GET["id"], $item_array_id))
					{
					$count = count($_SESSION["shopping_cart"]);
					$item_array = array(
						'item_id'			=>	$_GET["id"],
						'item_name'			=>	$_POST["hidden_name"],
						'item_price'		=>	$_POST["hidden_price"]
					);
						$_SESSION["shopping_cart"][$count] = $item_array;
					}
				else
				{
					echo '<script>alert("You have already added the same product earlier.")</script>';
				}
			}		
			else
			{
				$item_array = array(
					'item_id'			=>	$_GET["id"],
					'item_name'			=>	$_POST["hidden_name"],
					'item_price'		=>	$_POST["hidden_price"]
				);
				$_SESSION["shopping_cart"][0] = $item_array;
			}
		}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed is removed from your cart")</script>';
				echo '<script>window.location="oStore.php"</script>';
			}
		}
	}
}
?>