<?php 

include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` IN (1,3,6)");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php"; ?>
	<title>Document</title>
</head>

<body>
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2> My Cart </h2>

			<div class="grid gap">
				<div class="col-xs-12 col-md-7">
					<div class="card soft">
						<?= array_reduce($cart,function($r,$o){return $r."<div>$o->title</div>";}) ?>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-5">
				<div class="card flat">
					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Sub Total</strong></div>
						<div class="flex-none">&dollar;25.99</div>
					</div>

					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Tax</strong></div>
						<div class="flex-none">&dollar;2.59</div>
					</div>


					<div class="card-section display-flex">
						<div class="flex-stretch"><strong>Total</strong></div>
						<div class="flex-none">&dollar;28.01 </div>
					</div>

				</div>
			</div>


     	<div class="form-control">
        <button type="button" class="form-button"> <p><a href="product_checkout.php"> Checkout</p></button>
      	</div>

	</div>
</div>

</body>

</html>