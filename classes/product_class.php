<?php
//connect to database class
require_once("../settings/db_class.php");

/**
*Product class to handle all products functions 
*/
/**
 *@author Linda Arthur
 *
 */

class product_class extends db_connection
{
    /**
     * Category Functions
     */

     function createCategory($category_name){
        $sql="INSERT INTO `categories`(`category_name`) VALUES ('$category_name')";
        return $this->db_query($sql);
     }
     function deleteCatgeory($category_id){
        $sql="DELETE FROM `categories` WHERE 0`category_id`='$category_id' ";
        return $this->db_query($sql);
     }

     function selectAllCategory(){
        $sql="SELECT * FROM `categories`";
        return $this->getAllData($sql);
    
     }

     function selectACategory($category_id){
        $sql="SELECT * FROM `categories` WHERE `category_id`='$category_id' ";
        return $this->getAdata($sql);
     }
     function updateCategory($category_id,$category_name){
        $sql="UPDATE `categories` SET `category_name`='$category_name' WHERE `category_id`='$category_id'";
        return $this->db_query($sql);
     }




     /**
      * Product Funstionss
      */

    function createProduct($product_category, $product_name, $product_price, $product_description, $product_image, $product_search_words){
        $sql="INSERT INTO `products`(`product_category`, `product_name`, `product_price`, `product_description`, `product_image`, `product_search_words`) VALUES ('$product_category ','$product_name','$product_price','$product_description',' $product_image','$product_search_words')";
        return $this->db_query($sql);

    }

    function deleteProduct($product_id){
        $sql="DELETE FROM `products` WHERE `product_id`='$product_id'";
        return $this->db_query($sql);
    }

    function updateProduct($product_id,$product_category, $product_name, $product_price, $product_description,$product_search_words){
        $sql="UPDATE `products` SET `product_category`='$product_category',`product_name`='$product_name',`product_price`='$product_price',`product_description`='$product_description',`product_search_words`=' $product_search_words' WHERE `product_id`='$product_id'";
        return $this->db_query($sql);
    }

    function selectAllProduct(){
        $sql="SELECT * FROM `products`";
        return $this->getAllData($sql);
    }

    function selectAProduct($product_id){
        $sql="SELECT * FROM `products` WHERE `product_id`='$product_id'";
        return $this->getAdata($sql);
    }

    function selectProductByCategory($category){
        $sql="SELECT products.* FROM products,categories WHERE categories.category_id=products.product_category and categories.category_name LIKE '%$category%';";
        return $this->getAllData($sql);
    }

    function SearchProduct($SearchItem){
        $sql="SELECT * FROM `products`,`categories` WHERE product_name LIKE '%$SearchItem%' and product_search_words LIKE '%$SearchItem%' and categories.category_name LIKE '%$SearchItem%';";
        return $this->getAllData($sql);
    }
	

}

?>