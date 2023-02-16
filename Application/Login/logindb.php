<?php

session_start();

require '../Database/db.php';

$email = $_POST['email'];
$password = md5($_POST['password']);

// echo $email;
// echo $password."<br>";

$sql = "SELECT * FROM login where password = '$password'  AND email = '$email'";


$res = mysqli_query($conn, $sql);

$row = mysqli_num_rows($res);

if($row==1){
            header("location: ../User_details/welcome.php");
            
        }
        else{
            
           echo "Invalid username or password";
        }

    


// session_abort();

?>