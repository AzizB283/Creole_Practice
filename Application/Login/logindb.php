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

// if(email == $email){
//     $resp['msg'] = "Email already exist";
//     $resp['status'] = false;
//     echo json_encode($resp);
//     exit;
// }

if($row==1){

   $resp['status'] = true;
    echo json_encode($resp);
    exit;
            
        }
        else{
         $resp['msg'] = "Invalid email or password";
         $resp['status'] = false;
         echo json_encode($resp);
         exit;
        }
    


// session_abort();

?>