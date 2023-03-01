<?php

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods:PUT');
header('Access-Control-Allow-Headers:*');
header('Content-Type: application/json');

require "../Database/db.php";

$data = json_decode(file_get_contents("php://input"), true);

$id = trim( $_SERVER['PATH_INFO'], '/') ;

$sql = "SELECT id from login WHERE id = '$id'";

$res = mysqli_query($conn, $sql);
$row = mysqli_num_rows($res);

if($row>0){
    
    $sql1 = "DELETE FROM login WHERE id = '$id'";
    $res1 = mysqli_query($conn, $sql1);
    $msg = ['msg' => 'Data Deleted Successfully', 'status' => 200];
    echo json_encode($msg);
    
}
else{
    $msg = ['msg' => 'No Record Found', 'status' => 400];
    echo json_encode($msg);
}




?>