<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart_items = getCartItems();
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include "parts/meta.php";?>
		<title>My Cart</title>
	</head>
	
<body>
	<?php include "parts/navbar.php";?>
	<div class="container">
		<div class="card soft">
			<h2> My Cart </h2>

			<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<?= array_reduce($cart_items,'cartListTemplate') ?>
					</div>
				</div>
			</div>
					<div class="col-xs-12 col-md-5">
   					<?= cartTotals() ?>
					</div>
			</div>
			<div class="form-control">
        		<button type="button" class="form-button"> <p><a href="product_checkout.php"> Checkout</p></button>
      		</div>
	</div>
</body>
</html>