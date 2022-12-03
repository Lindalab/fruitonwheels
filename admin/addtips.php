<?php
require_once("../controllers/tip_controller.php");

if(isset($_POST['submit'])){
    $product_id=$_POST['myproduct'];
    $tip_title=$_POST['tipname'];
    $tip_date=$_POST['blogdate'];
    $message=$_POST['message'];

    $Blog=creatBlog_ctr($product_id,$tip_title,$tip_date,$message);
    if($Blog){
        echo "<script> alert('Blog created Successfully')</script>";
        header("location:../view/admin.php");
    }
    else{
        echo "<script> alert('Blog was not created')</script>";
        header("location:../view/admin.php");
    }

}
?>