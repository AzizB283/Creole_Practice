<?php

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods:PUT');
header('Access-Control-Allow-Headers:*');
header('Content-Type: application/json');

require "../Database/db.php";

$data = json_decode(file_get_contents("php://input"), true);

$id = trim( $_SERVER['PATH_INFO'], '/') ;

$name = $data['name'];
$email = $data['email'];
$password = md5($data['password']);
$role = $data['role'];

// $data = json_decode(file_get_contents("php://input"),true);
$sql = "SELECT * FROM login WHERE id = '$id'";
$res = mysqli_query($conn, $sql);
$row = mysqli_num_rows($res);

if($row>0){
    $sql1 = "UPDATE login SET name = '$name', email = '$email', password = '$password', role = '$role' WHERE id = '$id'";
    $res1 = mysqli_query($conn, $sql1);
    
    $msg = ['msg' => 'Data Updated Successfully', 'status' => 200];
    echo json_encode($msg);
    
}
else{
    $msg = ['msg' => 'No Record Found', 'status' => 400];
    echo json_encode($msg);
}




?>