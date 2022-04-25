<?php


function productListTemplate($r,$o) {
return $r.<<<HTML


	<div class="col-xs-12 col-md-4">
		<figure class="figure product">
				<img src="img/$o->thumbnail" alt="">
				<figcaption>
						<div><h3>$o->name</h3></div>
						<div>&dollar;$o->price</div>
				</figcaption>
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