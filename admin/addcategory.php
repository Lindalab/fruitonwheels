<?php
require_once("../controllers/product_controller.php");

if(isset($_POST['submit'])){
    $category_name=$_POST['categoryName'];
    $createCat=createCategory_ctr($category_name);
    if($createCat){
        echo "<script> alert('Category created Successfully')</script>";
        header("location:../view/admin.php");
    }
    else{
        echo "<script> alert('Category could not be created')</script>";
        header("location:../view/admin.php");

    }

}
?>