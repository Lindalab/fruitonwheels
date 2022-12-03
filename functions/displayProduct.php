<?php
require_once("../controllers/product_controller.php");

function showAllProducts_fnc()
{

    $data =selectAllProduct_ctr();
   

        foreach($data as $product) {

            $product_id = $product['product_id'];
            $productName = $product['product_name'];
            $productPrice = $product['product_price'];
            $productImage = $product['product_image'];
            showSingleProduct($product_id,$productName,$productPrice,$productImage);
            

            
        }
   
}



function showSingleProduct($product_id,$productName,$productPrice,$productImage)
{

    echo "
                <div class='col-lg-4 col-md-6 text-center strawberry'>
					<div class='single-product-item'>
						<div class='product-image'>
							<a href='single-product.php'><img src='$productImage' alt=''></a>
						</div>
						<h3>$productName</h3>
						<p class='product-price'><span>Per Kg</span> $productPrice GHC </p>
						<a href='cart.php?id=$product_id' class='cart-btn'><i class='fas fa-shopping-cart'></i> Add to Cart</a>
					</div>
				</div>
    ";
}

//Show by product Category

function showAllProductsByType_fnc($category)
{

    $data =selectProductByCategory($category);
   

        foreach($data as $product) {

            $product_id = $product['product_id'];
            $productName = $product['product_name'];
            $productPrice = $product['product_price'];
            $productImage = $product['product_image'];
            showSingleProductByType($product_id,$productName,$productPrice,$productImage);
            

            
        }
   
}



function showSingleProductByType($product_id,$productName,$productPrice,$productImage)
{

    echo "
               
					<div class='single-product-item'>
						<div class='product-image'>
							<a href='single-product.php'><img src='$productImage' alt=''></a>
						</div>
						<h3>$productName</h3>
						<p class='product-price'><span>Per Kg</span> $productPrice GHC </p>
						<a href='cart.php?id=$product_id' class='cart-btn'><i class='fas fa-shopping-cart'></i> Add to Cart</a>
					</div>
				
    ";
}

?>