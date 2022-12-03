<?php
require_once("../classes/product_class.php");


/**
* Category Functions
*/

function createCategory_ctr($category_name){
    $cat=new product_class;
    return $cat->createCategory($category_name);
}

function deleteCatgeory_ctr($category_id){
    $cat=new product_class;
    return $cat->deleteCatgeory($category_id);
}

function selectAllCategory_ctr(){
    $cat=new product_class;
    return $cat->selectAllCategory();
}

function selectACategory_ctr($category_id){
    $cat=new product_class;
    return $cat->selectACategory($category_id);
}

function updateCategory_ctr($category_id,$category_name){
    $cat=new product_class;
    return $cat->updateCategory($category_id,$category_name);
}


/**
 *  * Product Funstionss
 * */

function createProduct_ctr($product_category, $product_name, $product_price, $product_description, $product_image, $product_search_words){
   $product=new product_class;
    return $product->createProduct($product_category, $product_name, $product_price, $product_description, $product_image, $product_search_words);
}

function deleteProduct_ctr($product_id){
    $product=new product_class;
     return $product->deleteProduct($product_id);
 }

 function updateProduct_ctr($product_id,$product_category, $product_name, $product_price, $product_description, $product_image, $product_search_words){
    $product=new product_class;
     return $product->updateProduct($product_id,$product_category, $product_name, $product_price, $product_description, $product_image, $product_search_words);
 }

 function selectAllProduct_ctr(){
    $product=new product_class;
     return $product->selectAllProduct();
 }

 function selectAProduct_ctr($product_id){
    $product=new product_class;
     return $product->selectAProduct($product_id);
 }

 function selectProductByCategory($category){
    $product =new product_class;
    return $product->selectProductByCategory($category);
 }


?>
