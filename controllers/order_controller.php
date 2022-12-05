<?php
require_once("../classes/order_class.php");

function  addToOrder_ctr($customer_id,$invoice_no,$order_date,$order_status){
    $order= new order_class;
    return $order->addToOrder($customer_id,$invoice_no,$order_date,$order_status);
}

function getAllOrder_ctr(){
    $order= new order_class;
    return $order->getAllOrder();
}

function  getAnOrder_ctr($customer_id){
    $order= new order_class;
    return $order->getAnOrder($customer_id);
}

 /**
     * Actions for cart operations
     */

    function  addToCart_ctr($product_id, $ip_add, $customer_id,$quantity){
        $cart= new order_class;
        return $cart->addToCart($product_id, $ip_add, $customer_id,$quantity);
    }

    function  deletFromCart_ctr($product_id,$ip_add, $customer_id,$quantity){
        $cart= new order_class;
        return $cart->deletFromCart($product_id,$ip_add, $customer_id,$quantity);
    }

    function  showAllProductInCart_ctr(){
        $cart= new order_class;
        return $cart->showAllProductInCart();
    }

    function  showAPersonCart_ctr($customer_id,$ip_add){
        $cart= new order_class;
        return $cart->showAPersonCart($customer_id,$ip_add);
    }

    function showAPersonCartItem_ctr($customer_id,$ip_add,$product_id){
        $cart =new order_class;
        return $cart->showAPersonCartItem($customer_id,$ip_add,$product_id);

    }

    function  increaseCartItemByOne_ctr($product_id,$ip_add, $customer_id,$quantity){
        $cart= new order_class;
        return $cart->increaseCartItemByOne($product_id,$ip_add, $customer_id,$quantity);
    }

    function  decreaseCartItemByOne_ctr($product_id,$ip_add, $customer_id,$quantity){
        $cart= new order_class;
        return $cart->decreaseCartItemByOne($product_id,$ip_add, $customer_id,$quantity);
    }


     /**
     * Payment Actions
     */

    function  addToPayment_ctr($amount,$customer_id,$order_id,$currency,$payment_date){
        $payment= new order_class;
        return $payment->addToPayment($amount,$customer_id,$order_id,$currency,$payment_date);
    }


    /**
      * orderdetails Actions
      */

      function  addToOrderDetails_ctr($order_id,$product_id,$quantity){
        $ordedetails= new order_class;
        return $ordedetails->addToOrderDetails($order_id,$product_id,$quantity);
    }

    function showCustomerOrders_ctr(){
        $order = new order_class;
        return $order->showCustomersOrder();
    }



    
function get_client_ip()
{
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    } else if (isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    } else{
        $ipaddress = 'UNKNOWN';
    } 
    return $ipaddress;
}
   


?>