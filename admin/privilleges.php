<?php
require_once("../settings/core.php");

function destroyallSessions(){
    if(isset($_GET['Logout'])){
        session_destroy();
        header("location:../view/login.php");
    }
}

destroyallSessions();


?>