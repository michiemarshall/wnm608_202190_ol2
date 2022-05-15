<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php";

$cart_items = getCartItems();

?> <!DOCTYPE html>
<html lang="en">
	<head>
		<?php include "parts/meta.php";?>

		<title>Teaphoria - My Cart</title>
	</head>
	
<body>


	<?php include "parts/navbar.php";?><div class="container" id="productlist">   
        <h2>Your Cart</h2>
        <div class="grid gap">
            <div class="col-xs-12 col-md-7">
                <div class="card soft">
                    <?= array_reduce($cart_items,'cartListTemplate') ?>
                </div>
            </div>
            <div class="col-xs-12 col-md-5">
                <div class="card soft flat">
                    <?= cartTotals() ?>
                </div>
            </div>
        </div>


</div>
</body>
</html>