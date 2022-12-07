<?php
require("../controllers/order_controller.php");
session_start();



    $product_id = $_GET['pid'];
    $ip_add = get_client_ip();
    $customer_id =  $_SESSION['customer_id'] ;
    $quantity= 1;
    
    $checkItemExit=showAPersonCartItem_ctr($customer_id,$ip_add,$product_id);
    
    if(!$checkItemExit){
        
        $addCart= addToCart_ctr($product_id, $ip_add, $customer_id,$quantity);
        if(!$addCart){
            echo "<script>alert('Product was not successfully added to cart');</script>";
    
        }
        else{
            echo "<script>alert('Product successfully added to cart');</script>";
            header("location:../view/shop.php?message=success");
        }

    }
    else{
        
        $increaseQtyByOne= increaseCartItemByOne_ctr($product_id,$ip_add, $customer_id,$quantity);
        if($increaseQtyByOne){
            header("location:../view/shop.php?messageIncrease=success");
        }
            else{
                echo "<script>alert('Failed to increase Item Cart');</script>";
                }
       
    
    }


   



 



?>