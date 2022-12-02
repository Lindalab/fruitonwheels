<?php
require("../controllers/customer_controller.php");


if(isset($_POST['submit'])){
    $customer_name=$_POST['name'];
    $customer_email=$_POST['email'];
    $customer_pass=$_POST['password'];
    $customer_city=$_POST['city'];
    $customer_contact=$_POST['contact'];
    $user_role=2;

    $hashed_password = base64_encode($customer_pass);

    if(selectAdata($customer_email)===NULL){
        $register=createCustomer_ctr($customer_name, $customer_email,  $hashed_password , $customer_city, $customer_contact, $user_role);
        if($register==true){
            header("location:../view/login.php");

        }
        else{
            echo"<script> alert('Registration Unsuccessful');
            </script>";
            header("location:../view/register.php");
        }

    }
    else{
        echo "
        <script> alert('Email Already Exist');
            </script>
        
        ";
    }


    
}

?>