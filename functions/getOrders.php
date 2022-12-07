<?php
require_once("../controllers/order_controller.php");

function orderedViewTable_fnc()
{
    $data = showCustomerOrders_ctr();
    echo "

    <table class='table'>
    <thead class='table-warning'>
        <tr>
        <th scope='col'>Product Image</th>
          <th scope='col'> Quantity</th>
          <th scope='col'>Price</th>
          <th scope='col'>Customer Name</th>
          <th scope='col'>Customer Contact</th>
          <th scope='col'>Invoice No</th>
          <th scope='col'>Total(GHC)</th>
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
        $total=$orderquantity*$price;
        
        orderedItem_fnc( $productImage, $orderquantity,$price,$customerName,$customerContact,$invoiceNo,$total);
    }
    echo "
    </tbody>
	</table>
    ";
}

function orderedItem_fnc( $productImage, $orderquantity,$price,$customerName,$customerContact,$invoiceNo,$total)
{
    echo "
    <tr class='table-body-row'>
	<td class='product-image'><img src='".$productImage."' alt=''></td>
	<td class='product-quantity'>$orderquantity</td>
	<td class='product-price'>$price</td>
    <td class='customer-name'>$customerName</td>
    <td class='customer-contact'>$customerContact</td>
	<td class='customer-no'>$invoiceNo</td>
	<td class='product-total'>$total</td>
	</tr>
    ";
}

?>