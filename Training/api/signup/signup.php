<?php

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods:GET, POST, OPTIONS');
header('Access-Control-Allow-Headers:*');
header('Content-Type: application/json');

require "../Database/db.php";

$data = json_decode(file_get_contents("php://input"), true);
$name = $data['name'];
$email = $data['email'];
$password = md5($data['password']);
$role = $data['role'];


$sql = "INSERT INTO login (name, email, password, role) VALUES ('$name','$email', '$password','$role')";

$res = mysqli_query($conn, $sql);

if($res){
    $msg = ['msg' => 'Record Inserted Successfully', 'status' => 200];
    echo json_encode($msg);
    
}
else{
    $msg = ['msg' => 'Error Inserting Record', 'status' => 400];
    echo json_encode($msg);
}




?>