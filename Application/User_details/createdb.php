<?php

require "../Database/db.php";

// echo $_GET['name'];

if(!empty($_POST['name']) && ($_POST['email']) &&  ($_POST['number']) &&  ($_POST['gender']) &&  ($_POST['address'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $filename = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = "../images/" . $filename;

    $sql = "INSERT INTO user_details (name, email, number, gender, address, image) VALUES ('$name','$email', '$number', '$gender', '$address', '$filename')";

    if(mysqli_query($conn, $sql)){
        if(move_uploaded_file($tempname, $folder)){
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