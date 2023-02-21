<?php
    session_start();
    unset($_SESSION["email"]);
    unset($_SESSION["name"]);
    setcookie ("email",$email,time() -360000);
    setcookie ("password",$password,time() -360000);
    session_destroy();
    header("Location:login.php");
    
?>
