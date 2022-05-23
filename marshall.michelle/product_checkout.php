<?php
include_once "lib/php/functions.php";
include_once "parts/templates.php";
$cart = getCartItems();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php"; ?>
	<title>Checkout Page </title>
</head>

<body>
	<?php include "parts/navbar.php"; ?>


	<div class="container">
		<div class="card soft">

			<div class="grid gap">

    <div class="col-xs-12 col-md-5">
        <div class="card soft">
        <h2> Review Items</h2>

            <div class="card-section">

            <?php
            echo array_reduce($cart,function($r,$o){
                $totalfixed = number_format($o->total,2,'.','');
                return $r."<div class='display-flex'>
                <div class='flex-stretch'>$o->name</div>
                <div class='flex-none'>&dollar;$totalfixed</div>
                </div>";
            }) ?>
            </div>
            <?= cartTotals(); ?>
        </div>
    </div>

 <div class="col-xs-12 col-md-7">
			<div class="card">
    		 	 <h2>Shipping Address</h2>
			
    		 	 <input type="text" class="form-input" placeholder="Full Name">
    		 	 <input type="text" class="form-input" placeholder="E-mail">
    		 	 <input type="text" class="form-input" placeholder="Address">
    		 	 <input type="number" class="form-input" placeholder="Zip Code">
    		 	 <input type="number" class="form-input" placeholder="Phone Number">
   			
			
    		 	 <h2>Billing Address</h2>
			
    		 	 <input type="text" class="form-input" placeholder="Full Name">
    		 	 <input type="text" class="form-input" placeholder="Address">
    		 	 <input type="number" class="form-input" placeholder="Zip Code">
    		 	 <input type="number" class="form-input" placeholder="Phone Number">
			
    			
			
    		 	   <h2>Payment</h2>
			
    		 	 <input type="text" class="form-input" placeholder="Cardholder Full Name">
    		 	 <input type="number" class="form-input" placeholder="Expiry Date MM/YY ">
    		 	 <input type="number" class="form-input" placeholder="CVC/Security Code">
    		 	 <input type="number" class="form-input" placeholder="Credit Card Number">


    		 	 	<div class="container card soft">

				     	<div class="form-control">
				        <a href="product_confirmation.php" class="form-button">Complete Checkout</a>
				      	</div>

				  </div>
 			</div>






				</div>
      </div>
  	</div>
  </div>
</body>

</html>