<?php
require("../controllers/order_controller.php");

$product_id=$_GET['id'];
$ip_add=$_GET['ipaddress'];
$customer_id=$_GET['customerid'];
$quantity=$_GET['quantity'];

$deleteCart= deletFromCart_ctr($p_id,$ip_add, $c_id,$qty);


if(!$deleteCart){
    echo "<script>alert('Cart item could not delete');</script>";

}
else{
    echo "<script>alert('Cart item deleted Successfully');</script>";
    header("location:../view/cart.php");
}


?>