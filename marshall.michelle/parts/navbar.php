	<?php 

include "parts/meta.php";
include_once "lib/php/functions.php";

?>

	<header class="navbar"> 
	<div class="container">
		<div class="flex-none">
			<a href="index.php"> <h1> Teaphoria </h1></a>
		</div> 
					
					<nav class="nav nav-flex flex-none">
						<div class="flex-stretch">
							<div class="flex-none menu-button">
           						 <label for="menu">&equiv;</label>
							</div>


					 <nav class="nav nav-flex flex-stretch">
						<ul>
							<li> <a href="product_list.php">Products</a></li>
							<li> <a href="product_item.php?id=1">On Sale </a></li>
							<li> <a href="index.php">About Us</a></li>
							<li><a href="product_cart.php">
							<span>My Cart</span> <span class="badge"><?= makeCartBadge(); ?>
							 </span></a></li>
						</ul>
					</nav>
					</div>
					</nav>
	</div>
</header>