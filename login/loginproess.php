<?php
require("../controllers/customer_controller.php");

if(isset($_POST['submit'])){
    $customer_email=$_POST['email'];
    $customer_pass=$_POST['password'];
    $hashed_password = base64_encode($customer_pass);

    $login=checkPassword_ctr($customer_email,$hashed_password );
    if($login){
        session_start();
        $_SESSION['customer_id'] = $login['customer_id'];
        $_SESSION['customer_name'] = $login['customer_name'];
        $_SESSION['customer_email'] = $login['customer_email'];
        $_SESSION['customer_pass'] = $login['customer_pass'];
        $_SESSION['customer_city'] = $login['customer_city'];
        $_SESSION['customer_contact'] = $login['customer_contact'];
        $_SESSION['user_role'] = $login['user_role'];
        $_SESSION['userLogin']=true; 
        if($_SESSION['user_role']  == 1){
            header("location:../view/admin.php");

        }
        else{
            header("location:../view/shop.php");
        }

    }
    else{
        echo "<script> alert('Wrong Crendentials')</script>";
    }

}

?>