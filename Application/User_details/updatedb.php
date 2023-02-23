<?php

require "../Database/db.php";

// echo $_GET['name'];

if(!empty($_POST['name']) && ($_POST['email']) &&  ($_POST['number']) &&  ($_POST['gender']) &&  ($_POST['address'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $image = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = "../images/" . $image;

    $sql = "UPDATE user_details SET name = '$name', email = '$email', number = '$number', gender = '$gender', address = '$address', image = '$image' WHERE id = '$id'";

    if(mysqli_query($conn, $sql)){
        if(move_uploaded_file($tempname, $folder)){

            
            $resp['status'] = true;
            echo json_encode($resp);
        }
        
        
        exit;
    }
    else{
        $resp['msg'] = "Data can not update";
        $resp['status'] = false;
        echo json_encode($resp);
    }
}
else{
   // echo ($_POST['name']) + " -> " + $_POST['email']  + " -> " + $_POST['number']  + " -> " + ($_POST['gender'])  + " -> " +  ($_POST['address']);
}


?>