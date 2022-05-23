	<?php 
		include_once "lib/php/functions.php";
		include_once "parts/templates.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<?php include "parts/meta.php"; ?>

	<title>Teaphoria </title>
    <script src="lib/js/functions.js"></script>
    <script src="lib/js/templates.js"></script>
    <script src="lib/js/productlist.js"></script>

</head>

<body>
	<?php include "parts/navbar.php"; ?>


	    <div class="container" id="productlist_margin">


    <div class="card soft">
       
        <div class="form-control">
            	    <input type="search" class="hotdog" placeholder="Browse your favorite teas by name, region, or flavour.">
         </div>
            	
       

			<div>
    		    <div class="form-control display-flex flex-stretch">
    		        <div class="filter-button">
    		            <button data-filter="category" data-value="" type="button" class="form-button">All Products</button>
    		        </div>
    		        <div class="filter-button">
    		            <button data-filter="category" data-value="East Asian" type="button" class="form-button">East Asian Teas</button>
    		        </div>
    		        <div class="filter-button">
    		            <button data-filter="category" data-value="European" type="button" class="form-button">European Teas</button>
		
    		        </div>
    		        		<div class="flex-none">
    		        		<div class="form-select">
    		        		    <select class="js-sort">
    		        		        <option value="1">Newest</option>
    		        		        <option value="2">Bestsellers</option>
    		        		        <option value="3">Price: Low to High</option>
    		        		        <option value="4">Price: High to Low</option>
    		        		    </select>
    		        		</div>
    		    			</div>
    		    </div>
    		</div>

    </div>

	<div class="container">
		<div class="card soft">
			<h2> Teaphoria Best Sellers </h2>

			<div class='productlist grid gap'>


			</div>
	</div>

	</div>
</div>
	
</body>
</html>