<?php
require("../controllers/product_controller.php");

if(isset($_POST['submit'])){
    $product_category= $_POST[''];
    $product_name=$_POST['pname'];
    $product_price=$_POST['pprice'];
     $product_description=$_POST['pdesc'];
     
       $product_search_words=$_POST['pkeyword'];


       $product_image=$_POST[''];


    createProduct_ctr($product_category, $product_name, $product_price, $product_description, $product_image, $product_search_words);

}
?>