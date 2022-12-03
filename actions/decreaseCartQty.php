<?php
require("../controllers/order_controller.php");

$product_id=$_GET['id'];
$ip_add=$_GET['ipaddress'];
$customer_id=$_GET['customerid'];
$quantity=$_GET['quantity'];

$decreaseQtyByOne= decreaseCartItemByOne_ctr($product_id,$ip_add, $customer_id,$quantity);


if($decreaseQtyByOne){
    header("location:../view/cart.php");

}


?>