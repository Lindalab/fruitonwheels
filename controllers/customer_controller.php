<?php
require_once("../classes/customer_class.php");

function createCustomer_ctr($customer_name, $customer_email, $customer_pass, $customer_city, $customer_contact, $user_role){
  $customer=new customer_class;
  return $customer->createCustomer($customer_name, $customer_email, $customer_pass, $customer_city, $customer_contact, $user_role);
}

function updateCustomer_ctr($customer_id,$customer_name, $customer_email, $customer_pass, $customer_city, $customer_contact, $user_role){
    $customer=new customer_class;
    return $customer->updateCustomer($customer_id,$customer_name, $customer_email, $customer_pass, $customer_city, $customer_contact, $user_role);
  }

  function deleteCustomer_ctr($customer_id){
    $customer=new customer_class;
    return $customer->deleteCustomer($customer_id);
  }

  function selectAll_ctr(){
    $customer=new customer_class;
    return $customer->selectAll();
  }

  function selectAdata($customer_email){
    $customer=new customer_class;
    return $customer->selectAdata($customer_email);
  }

  function checkPassword_ctr($customer_email,$customer_pass){
    $customer=new customer_class;
    return $customer->checkPassword($customer_email,$customer_pass);
  }










?>