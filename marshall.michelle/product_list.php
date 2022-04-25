<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php"; ?>
	<title>Teaphoria </title>

</head>

<body>
	<?php include "parts/navbar.php"; ?>

	<div class="container">
		<div class="card soft">
			<h2> Teaphoria Best Sellers </h2>
			
			<ul>
				<li><a href="product_item.php?id=1">Product 1 example</a></li>

			</ul>





	<?php 
		include_once "lib/php/functions.php";
		include_once "parts/templates.php";

		$result = makeQuery(
			makeConn(),
			"
			SELECT *
			FROM `products` 
			ORDER BY `date_create` DESC
			LIMIT 12 
			"
		);

		echo "<div class='grid gap'>",array_reduce($result,'productListTemplate'),"</div>"; 

	?> 
	</div>
</div>
	
</body>
</html>