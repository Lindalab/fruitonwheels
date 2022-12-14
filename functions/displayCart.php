<?php
require_once("../controllers/order_controller.php");
session_start();




function myCartViewTable_fnc()
{
    //if(!isset($_SESSION['customer_id']))
    $data = showAPersonCart_ctr($_SESSION['customer_id'], get_client_ip());
    $catTotal=0;
    
    foreach ($data as $cartItem) {
        $productId=$cartItem['product_id'];
        $productName=$cartItem['product_name'];
        $productPrice=$cartItem['product_price'];
        $productQuantity=$cartItem['quantity'];
        $productImage=$cartItem['product_image'];
        $customerIpadd=$cartItem['ip_add'];
        $customerId=$_SESSION['customer_id'];
        $total= $productQuantity *$productPrice ;
        $catTotal+=$total;
        myCartItems_fnc($productId,$productName,$productPrice,$productQuantity,$productImage,$customerIpadd, $customerId, $total);
        
    }
     
    return $catTotal;
}


function myCartItems_fnc($productId,$productName,$productPrice,$productQuantity,$productImage,$customerIpadd, $customerId,$total)
{ 
    echo "

    <tr class='table-body-row'>
    <td <a class='btn-sm '><a href='../actions/deleteCartItem.php?id=$productId&ipaddress=$customerIpadd&customerid=$customerId&quantity=$productQuantity'><i class='bi bi-trash-fill text-danger'></a></td>
    <td class='product-image'><img src='$productImage' alt=''></td>
    <td class='product-name'>$productName</td>
    <td class='product-price'>$productPrice</td>
    <td class='product-quantity'>$productQuantity</td>
    <td><a class='btn-sm btn-success' href='../actions/increaseCartQty.php?id=$productId&ipaddress=$customerIpadd&customerid=$customerId&quantity=$productQuantity'><i class='bi bi-plus'></i></a></td>
    <td><a class='btn-sm btn-danger' href='../actions/decreaseCartQty.php?id=$productId&ipaddress=$customerIpadd&customerid=$customerId&quantity=$productQuantity'><i class='bi bi-dash-lg'></i></a></td>
    <td class='product-total'>$total</td>
   </tr>


    ";
}



// Check Out 

function myPaymentSummaryTable_fnc()
{
    
    $data = showAPersonCart_ctr($_SESSION['customer_id'], get_client_ip());
    $catTotal=0;
    
    foreach ($data as $cartItem) {
        $productId=$cartItem['product_id'];
        $productName=$cartItem['product_name'];
        $productPrice=$cartItem['product_price'];
        $productQuantity=$cartItem['quantity'];
        $total= $productQuantity *$productPrice ;
        $catTotal+=$total;
        mySummary_fnc($productId,$productName, $total);
        
    }
     
    return $catTotal;
}


function mySummary_fnc($productId,$productName,$total)
{ 
    echo "

    <tr>
	<td>$productName</td>
	<td>$total</td>
	</tr>


    ";
}



?>