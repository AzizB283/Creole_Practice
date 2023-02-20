<?php

require '../Database/db.php';
session_start();

$userotp = $_POST['otp'];
$genotp = $_SESSION['otp'];

if(!empty($_POST['otp'])){

    if($userotp == $genotp){

        $success = 1;
        echo $success;
        $sql2 = "DELETE FROM otp WHERE otp = '$userotp'";
        $res2 = mysqli_query($conn,$sql2);
    }

    else{
        // $resp['msg'] = "OTP not matched";
        // $resp['status'] = false;
        // echo json_encode($resp);
    }


}


?>