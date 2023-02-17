<?php

require '../Database/db.php';

// $name = $_POST['name'];
// $email = $_POST['email'];
// $password = md5($_POST['password']);

$otp = $_POST['otp'];

$sql1 = "SELECT otp FROM otp where otp = '$otp'";


$res= mysqli_query($conn,$sql1);
$count = mysqli_num_rows($res);



if($count === 1){
 
    // $resp['status'] = true;
    //     echo json_encode($resp);
    //     exit;

    echo "OTP Verified Successfully";
    
}

else{
    $resp['msg'] = "OTP not matched";
    $resp['status'] = false;
    echo json_encode($resp);
}




?>