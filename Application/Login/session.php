<?php

session_start();

$email = $_SESSION['email'];

$res=mysqli_query($conn,"select name from login where email='$email'");
$row= mysqli_fetch_array($res,MYSQLI_ASSOC);

$_SESSION['name']=$row['name'];
if(!isset($_SESSION['name'])){
    header("location:login.php");
    die();
 }

?>