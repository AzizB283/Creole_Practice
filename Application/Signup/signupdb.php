<?php

require 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$sql = "INSERT INTO login (name, email, password) VALUES ('$name', '$email', '$password')";

if(mysqli_query($conn,$sql)){
    $last_id = mysqli_insert_id($conn);
    echo "New record inserted successfully ".$last_id;
}

else {
    echo " Error : ".mysqli_error($conn);
}


?>