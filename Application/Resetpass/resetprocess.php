<?php

session_start();

require "../Database/db.php";

$sessionemail = $_SESSION['email'];

if(!empty($_POST['password'])){

    $password = md5($_POST['password']);

    $sql = "UPDATE login SET password = '$password' WHERE email = '$sessionemail'";

    if(mysqli_query($conn, $sql)){
        $success = 1;
        echo $success;
    }
    else{
    }
}

?>