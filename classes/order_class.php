<?php
//connect to database class
require_once("../settings/db_class.php");

/**
*payment class to handle all functions 
*/
/**
 *@author Linda Arthur
 *
 */

class order_class extends db_connection
{
	
	function addToOrder($customer_id,$invoice_no,$order_date,$order_status){
        $sql="INSERT INTO `orders`(`customer_id`, `invoice_no`, `order_date`,`order_status`) VALUES ('$customer_id','$invoice_no','$order_date','$order_status')";
        $this->db_query($sql);
        $last_id = mysqli_insert_id($this->conn);
        return  $last_id;
    }

    function getAllOrder(){
        $sql="SELECT * FROM `orders`";
        return $this->db_query($sql);
    }

    function getAnOrder($customer_id){
        $sql="SELECT * FROM `orders` WHERE `customer_id`='$customer_id'";
        return $this->db_query($sql);
    }
     

    /**
     * Actions for cart operations
     */

    public function addToCart($product_id, $ip_add, $customer_id,$quantity){
        $sql="INSERT INTO `product_carts`(`product_id`, `ip_add`, `customer_id`, `quantity`) VALUES ('$product_id','$ip_add','$customer_id','$quantity')";
        return $this->db_query($sql);
    }

    public function deletFromCart($product_id,$ip_add, $customer_id,$quantity){
        $sql="DELETE FROM `product_carts` WHERE `product_id`='$product_id' and  `ip_add`='$ip_add' and `customer_id`='$customer_id' and `quantity`='$quantity'";

        return $this->db_query($sql);
    }

    public function showAllProductInCart(){
        $sql="SELECT products.*,product_carts.ip_add,product_carts.customer_id,product_carts.quantity FROM `products`,`product_carts` WHERE product_carts.product_id=products.product_id;";
        return $this->getAllData($sql);
    }

    public function showAPersonCart($customer_id,$ip_add){
        $sql="SELECT products.product_name as product_name , products.product_price as product_price,products.product_image as product_image, product_carts.quantity as quantity,product_carts.product_id as product_id,product_carts.ip_add as ip_add,product_carts.customer_id as customer_id from products,product_carts,customer where product_carts.product_id=products.product_id and product_carts.customer_id=customer.customer_id
        and product_carts.customer_id='$customer_id' and ip_add ='$ip_add' " ;
        return $this->getAllData($sql);
    }

    public function showAPersonCartItem($customer_id,$ip_add){
        $sql="SELECT products.product_name as product_name , products.product_price as product_price,products.product_image as product_image, product_carts.quantity as quantity,product_carts.product_id as product_id,product_carts.ip_add as ip_add,product_carts.customer_id as customer_id from products,product_carts,customer where product_carts.product_id=products.product_id and product_carts.customer_id=customer.customer_id
        and product_carts.customer_id='$customer_id' and ip_add ='$ip_add' " ;
        return $this->getAllData($sql);
    }



    // updation in cart table

    public function increaseCartItemByOne($product_id,$ip_add, $customer_id,$quantity){
        $quantity+=1;
        $sql="UPDATE `product_carts` SET `quantity`='$quantity' WHERE `product_id`='$product_id' and `ip_add`='$ip_add' and `customer_id`='$customer_id'";
        return $this->db_query($sql);

    }

    public function decreaseCartItemByOne($product_id,$ip_add, $customer_id,$quantity){
       $quantity-=1;
        $sql="UPDATE `product_carts` SET `quantity`='$quantity' WHERE `product_id`='$product_id' and `ip_add`='$ip_add' and `customer_id`='$customer_id'";
        return $this->db_query($sql);

    }

    /**
     * Payment Actions
     */

    public function addToPayment($amount,$customer_id,$order_id,$currency,$payment_date){
        $sql="INSERT INTO `payment`(`amount`, `customer_id`, `order_id`, `currency`, `payment_date`) VALUES ('$amount','$customer_id','$order_id','$currency','$payment_date')";
        return $this->db_query($sql);
    }

   

     /**
      * orderdetails Actions
      */

      public function addToOrderDetails($order_id,$product_id,$quantity){
        $sql="INSERT INTO `orderdetails`(`order_id`, `product_id`, `quantity`) VALUES ('$order_id','$product_id','$quantity')";
        return $this->db_query($sql);
    }

    function showCustomersOrder(){
        $sql="SELECT products.product_image, orderdetails.quantity,products.product_price,customer.customer_name, customer.customer_contact,orders.invoice_no,orders.order_status FROM products,customer,orders,orderdetails WHERE customer.customer_id=orders.customer_id and orders.order_id=orderdetails.order_id and orderdetails.product_id=products.product_id";
        return $this->getAllData($sql);
    }


    
    

}

?>