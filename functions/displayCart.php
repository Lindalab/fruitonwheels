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
    <td class='product-remove'><a href='../actions/deleteCartItem.php?id=$productId&ipaddress=$customerIpadd&customerid=$customerId&quantity=$productQuantity'><i class='far fa-window-close'></i></a></td>
    <td class='product-image'><img src='$productImage' alt=''></td>
    <td class='product-name'>$productName</td>
    <td class='product-price'>$productPrice</td>
    <td class='product-quantity'>$productQuantity</td>
    <td><a class='btn-sm btn-success' href='../actions/increaseCartQty.php?id=$productId&ipaddress=$customerIpadd&customerid=$customerId&quantity=$productQuantity'><i style='' class='bi bi-plus'></i></a></td>
    <td><a class='btn-sm btn-danger' href='../actions/decreaseCartQty.php?id=$productId&ipaddress=$customerIpadd&customerid=$customerId&quantity=$productQuantity'><i class='bi bi-dash-lg'></i></a></td>
    <td class='product-total'>$total</td>
   </tr>


    ";
}



?>