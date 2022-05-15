<?php 

include_once "lib/php/functions.php";

$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id`=".$_GET['id'])[0];

$images = explode(",",$product->images);

$image_elements = array_reduce($images,function($r,$o){
return $r."<img src='img/$o'>";
});

// print_p($product);

?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Product Item</title>
		<?php include "parts/meta.php"; ?>
		<script src= "lib/js/product_thumbs.js"></script>
</head>

<body>
	<?php include "parts/navbar.php"; ?>


	<div class="container">
		<div class="grid gap">
			<div class="col-xs12 col-md-7">
				<div class="card soft">
					<div class="images-main">
						<img src="img/<?= $product->thumbnail ?>">
					</div>

					<div class="images-thumbs">
						<?= $image_elements ?>
					</div>
				</div>
			</div>

			<div class="col-xs12 col-md-5">
					<div class="card soft">
						<form class="card soft flat" method="post" action="cart_actions.php?action=add-to-cart">
							

                <input type="hidden" name="product-id" value="<?= $product->id ?>">

                <div class="card-section">
                 <h2 class="title"><?= $product->name ?></h2>

                 <p class="product-price">&dollar;<?= $product->price ?></p>


                 <p class="product-description"><?= $product->description ?></p>


                </div>

               		<div class="card-section">
               		    <label for="product-amount" class="form-label">Amount</label>
               		    <div class="form-select">
               		        <select id="product-amount" name="product-amount">
               		            <option>1</option>
               		            <option>2</option>
               		            <option>3</option>
               		            <option>4</option>
               		            <option>5</option>
               		         </select>
               		    </div>
                </div>

                <div class="card-section">
                    <input type="submit" class="form-button" value="Add to Cart"> 
                </div>
            </form>
					</div>
			</div>
		</div>

		<div class="card soft dark">
			<p><?=$product->description ?></p>

		</div>
	</div>
</body>
</html>