<?php

require "../Database/db.php";

// echo $_GET['name'];

if(!empty($_POST['name']) && !empty($_POST['email']) &&  !empty($_POST['number']) &&  !empty($_POST['gender']) &&  !empty($_POST['address'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $base_dir = "../images/";
    
    
    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];

    $sql = "INSERT INTO user_details (name, email, number, gender, address, image) VALUES ('$name','$email', '$number', '$gender', '$address', '$filename')";

    if(mysqli_query($conn, $sql)){
        $sql2 = "SELECT id FROM user_details WHERE email = '$email'";
        $res2 = mysqli_query($conn, $sql2);
        $row2 = mysqli_fetch_assoc($res2);
        $id = $row2['id'];

        $new_dir = $id;

        mkdir($base_dir . $new_dir);
        $target_file = $base_dir . $new_dir . '/'. $filename ;

        if(move_uploaded_file($tempname, $target_file)){
            $resp['status'] = true;
         echo json_encode($resp);
        }
        
        exit;
    }
    else{
        $resp['msg'] = "Data can not add";
        $resp['status'] = false;
        echo json_encode($resp);
    }
}
else{
   // echo ($_POST['name']) + " -> " + $_POST['email']  + " -> " + $_POST['number']  + " -> " + ($_POST['gender'])  + " -> " +  ($_POST['address']);
}


?>