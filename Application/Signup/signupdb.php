<?php

require '../Database/db.php';


if(!empty($_POST['name']) && !empty($_POST['email']) &&  !empty($_POST['password'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql1 = "SELECT email FROM login where email = '$email'";


    $res= mysqli_query($conn,$sql1);
    $count = mysqli_num_rows($res);
    
    if($count === 0){
        $sql = "INSERT INTO login (name, email, password) VALUES ('$name', '$email', '$password')";
        $res1 = mysqli_query($conn, $sql);
        $resp['status'] = true;
        echo json_encode($resp);
        exit;
    
    }

    else{
        $resp['msg'] = "Email already exist";
        $resp['status'] = false;
        echo json_encode($resp);
    }
}




?>