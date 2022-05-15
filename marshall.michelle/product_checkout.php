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
 			</div>




				<div class="container">

				     	<div class="form-control">
				        <a href="product_confirmation.php" class="form-button">Complete Checkout</a>
				      </div>

				</div>
      </div>
  	</div>
</body>

</html>