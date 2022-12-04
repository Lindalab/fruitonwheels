<?php
require_once("../controllers/order_controller.php");

function orderedViewTable_fnc()
{
    $data = showCustomerOrders_ctr();
    echo "
    <table class='cart-table'>
	<thead class='cart-table-head'>
	<tr class='table-head-row'>
    <th class='product-image'>Product Image</th>
	<th class='product-quantity'>Quantity</th>
	<th class='product-price'>Price</th>
	<th class='customer-name'>Customer Name</th>
    <th class='customer-contact'>Customer Contact</th>
	<th class='customer-no'>Invoice No</th>
	<th class='order-status'>Order Status</th>
	<th class='product-total'>Total(GHC)</th>
	</tr>
	</thead>
	<tbody>
    
    ";

    foreach ($data as $product) {
        $productImage=$product['product_image'];
        $orderquantity=$product['quantity'];
        $price=$product['product_price'];
        $customerName=$product['customer_name'];
        $customerContact=$product['customer_contact'];
        $invoiceNo=$product['invoice_no'];
        $orderStatus=$product['order_status'];
        $total=$orderquantity*$price;
        
        orderedItem_fnc( $productImage, $orderquantity,$price,$customerName,$customerContact,$invoiceNo,$orderStatus,$total);
    }
    echo "
    </tbody>
	</table>
    ";
}

function orderedItem_fnc( $productImage, $orderquantity,$price,$customerName,$customerContact,$invoiceNo,$orderStatus,$total)
{
    echo "
    <tr class='table-body-row'>
	<td class='product-image'><img src='".$productImage."' alt=''></td>
	<td class='product-quantity'>$orderquantity</td>
	<td class='product-price'>$price</td>
    <td class='customer-name'>$customerName</td>
    <td class='customer-contact'>$customerContact</td>
	<td class='customer-no'>$invoiceNo</td>
    <td class='order-status'>$orderStatus</td>
	<td class='product-total'>$total</td>
	</tr>
    ";
}

?>