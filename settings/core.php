<?php
//start session
session_start(); 

//for header redirection
//ob_start();

//funtion to check for login
function checkLogin(){
  
    return isset($_SESSION['userLogin']);
}




//function to get user ID


//function to check for role (admin, customer, etc)
function checkUserRole($rolevalue)
{
    if ($rolevalue === '1') {
        return true;
    } else {
        return false;
    }
}

?>