<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		include "parts/meta.php";
		include_once "lib/php/functions.php";
		include_once "parts/templates.php";
?>

	<title>Teaphoria Loose Leaves </title>

</head>

<body>
	<!--php-->
	
	<?php include "parts/navbar.php" ?>

		<div class="view-window" style="background-image: url(https://images.pexels.com/photos/2884905/pexels-photo-2884905.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);">	
			<div class="overlay"> Artisan teas, curated for you <br> Free Shipping on orders $20+ <br>



				</div>

									<div class="container" align="center">
					
					     	<div class="form-control">
					        <button type="button" class="form-button"> <p><a href="product_list.php">Shop Now</a></p></button>
					
					      </div>
					
					</div>
					<div class="display-flex"> </div>
<br>
			</div>


	

		
		<div class="container">    
				<div class="container card soft">
        		<div class="flex flex-stretch "><h2>New Arrivals</h2>
        		<?php recommendedCategory("East Asian"); ?>
    			</div>
    			</div>
	
		</div>
		




<?php include "parts/footer.php" ?>

</body>
</html>