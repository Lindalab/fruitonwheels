<?php
require_once("../controllers/product_controller.php");

function getAllCategoryDropdown()
{
    $data = selectAllCategory_ctr();
    echo "
    <select class='custom-select' name='mycat' id='mycat' >
    ";
    foreach ($data as $category) {
        $catId = $category['category_id'];
        $catName = $category['category_name'];
        mycat($catId, $catName);
    }
    echo "</select>";
}

function mycat($catId, $catName)
{
    echo "
    <option value='$catId'>$catName</option>
    
    ";
}


function getAllProductDropdown()
{
    $data = selectAllProduct_ctr();
    echo "
    <select class='custom-select' name='myproduct' id='myproduct' >
    ";
    foreach ($data as $products) {
        $productID = $products['product_id'];
        $productName = $products['product_name'];
        myproduct($productID, $productName);
    }
    echo "</select>";
}

function myproduct($productID, $productName)
{
    echo "
    <option value='$productID'>$productName</option>
    
    ";
}
?>