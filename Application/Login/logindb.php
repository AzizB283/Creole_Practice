<?php

session_start();

require '../Database/db.php';

if(!empty($_POST['remember'])){
    setcookie ("email",$_POST["email"],time()+ 86400);
	setcookie ("password",$_POST["password"],time()+ 86400);

}

if(!empty($_POST['email']) && $_POST['password']) {

    $email = $_POST['email'];
    $_SESSION['email'] = $email;
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM login where password = '$password'  AND email = '$email'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_num_rows($res);


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
}
    

// session_abort();

?>