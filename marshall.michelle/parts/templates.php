<?php


function productListTemplate($r,$o) {
return $r.<<<HTML


	<div class="col-xs-12 col-md-4">
		<figure class="figure product">
		<a href="product_item.php?id=$o->id">
				<div class="images-thumbs"> <img src="img/$o->thumbnail" alt="">
				<figcaption>
						<div><h3>$o->name</h3></div>
						<div>&dollar;$o->price</div>
				</figcaption>
				</div>
				</a>
		</figure>	
			
	</div>
HTML;
}

function cartListTemplates($r,$o){
return $r.<<<HTML

	<div class="display-flex">
		<div class="flex-none images-thumbs">
			<img src="img/$o->thumbnail">
		</div>
		<div class="flex-stretch"></div>
	
		<strong>$o->name</strong>
		<div>Delete</div>
	</div>
	<div class="flex-none">
		 &dollar;$o->price
	</div>

HTML;
}


function cartTotals() {
    $cart = getCartItems();

    $cartprice = array_reduce($cart,function($r,$o){return $r + $o->total;},0);

    $pricefixed = number_format($cartprice,2,'.','');
    $taxfixed = number_format($cartprice*0.065,2,'.','');
    $taxedfixed = number_format($cartprice*1.08625,2,'.','');

return <<<HTML
		<div class="card-section display-flex">
		    	<div class="flex-stretch"><strong>Sub-total</strong></div>
		    	<div class="flex-none">&dollar;$pricefixed</div>
		</div>
		
		
		<div class="card-section display-flex">
		    	<div class="flex-stretch"><strong>Taxes</strong></div>
		    	<div class="flex-none">&dollar;$taxfixed</div>
		</div>

		<div class="card-section display-flex">
		    <div class="flex-stretch"><strong>Total</strong></div>
		    <div class="flex-none">&dollar;$taxedfixed</div>
		</div>

		<div class="card-section">
		    <a href="product_checkout.php" class="form-button">Move to Checkout</a>
		</div>
HTML;
}