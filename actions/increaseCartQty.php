<?php
require("../controllers/order_controller.php");

$product_id=$_GET['id'];
$ip_add=$_GET['ipaddress'];
$customer_id=$_GET['customerid'];
$quantity=$_GET['quantity'];
 //echo $product_id,$ip_add, $customer_id,$quantity; 
$increaseQtyByOne= increaseCartItemByOne_ctr($product_id,$ip_add, $customer_id,$quantity);


if($increaseQtyByOne){
    header("location:../view/cart.php");

}
else{
    echo "Ilove Eric";
}

?>