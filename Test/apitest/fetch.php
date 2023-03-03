<?php

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods:GET, POST, OPTIONS');
header('Access-Control-Allow-Headers:*');
header('Content-Type: application/json');

require "db.php";
include "validate.php";

$data = json_decode(file_get_contents("php://input"), true);

$id = $_POST['id']; 


$sql = "SELECT * FROM apilogin";

$res = mysqli_query($conn, $sql);

$row = mysqli_num_rows($res);

$arr = [];

if($row > 0){
    while($row = mysqli_fetch_assoc($res)){
        // foreach($row as $key => $value){
        //     echo $key . " => ". $value;
        //     echo "\n";
        // }

        $records = [
            "id" => $row['id'],
            "name" => $row['name'],
            "email" => $row['email'],
            "password" => $row['password']
        ];

        array_push($arr, $records);
    }
    $msg = ['msg' => 'Fetch Successfully', 'status' => 200, 'Records'=>$arr];
    echo json_encode($msg);
    
}
else{
    $msg = ['msg' => 'No Record Found', 'status' => 400];
    echo json_encode($msg);
}




?>