<?php
//connect to database class
require_once("../settings/db_class.php");

/**
*Customer class to handle all functions 
*/
/**
 *@author Linda Arthur
 *
 */

class customer_class extends db_connection
{
	
    function createCustomer($customer_name, $customer_email, $customer_pass, $customer_city, $customer_contact, $user_role){
      $sql="INSERT INTO `customer`(`customer_name`, `customer_email`, `customer_pass`, `customer_city`, `customer_contact`, `user_role`) VALUES ('$customer_name ','$customer_email ','$customer_pass','$customer_city ','$customer_contact ','$user_role')";
      return $this->db_query($sql);  
    }

    function updateCustomer($customer_id,$customer_name, $customer_email, $customer_pass, $customer_city, $customer_contact, $user_role){
        $sql="UPDATE `customer` SET `customer_name`='$customer_name',`customer_email`='$customer_email',`customer_pass`='$customer_pass',`customer_city`='$customer_city',`customer_contact`='$customer_contact',`user_role`='$user_role' WHERE `customer_id`='$customer_id'";
        return $this->db_query($sql);

    }

    function deleteCustomer($customer_id){
        $sql="DELETE FROM `customer` WHERE `customer_id`='$customer_id'";
        return $this->db_query($sql);
    }

    function selectAll(){
        $sql="SELECT * FROM `customer` ";
        return $this->getAllData($sql);
    }

    function selectAdata($customer_email){
        $sql="SELECT * FROM `customer` WHERE `customer_email`='$customer_email' ";
        return $this->getAdata($sql);
    }

    function checkPassword($customer_email,$customer_pass){
        $sql="SELECT * FROM `customer` WHERE `customer_email`='$customer_email' and `customer_pass`='$customer_pass'";
        return $this->getAdata($sql);
    }
    

	

}

?>