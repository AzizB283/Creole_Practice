<?php

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods:GET, POST, OPTIONS');
header('Access-Control-Allow-Headers:*');
header('Content-Type: application/json');

require "../Database/db.php";
require "../phpjwt/src/BeforeValidException.php";
require "../phpjwt/src/CachedKeySet.php";
require "../phpjwt/src/ExpiredException.php";
require "../phpjwt/src/JWK.php";
require "../phpjwt/src/JWT.php";
require "../phpjwt/src/Key.php";
require "../phpjwt/src/SignatureInvalidException.php";
use Firebase\JWT\JWT;

$data = json_decode(file_get_contents("php://input"), true);

$email = $data['email']; 
$userpassword = md5($data['password']);


$sql = "SELECT * FROM login WHERE email = '$email'";

$res = mysqli_query($conn, $sql);

$row = mysqli_num_rows($res);

$rows = mysqli_fetch_assoc($res);


$arr = [];

if($row > 0){
        $key = "examplekey";
        $password = $rows['password'];
        
        
        $payload = [
            "id" => $rows['id'],
            "name" => $rows['name'],
            "email" => $rows['email'],
            "exp" => time() + (2 * 60)
        ];
        
        if($userpassword == $password){
            $jwt = JWT::encode($payload, $key, 'HS256');

            $arr['name']=$rows['name'];
            $arr['email']=$rows['email'];
            $arr['jwt']=$jwt;

            $msg = ['msg' => 'Login Successfully', 'status' => 200, 'Token'=>$arr];
            
        }
        else{
            $msg = ['msg' => 'Login unsuccessfull', 'status' => 200, 'Token'=>$arr];
            // echo json_encode($msg);
        }
        echo json_encode($msg);
            
    }
    

else{
    $msg = ['msg' => 'No Record Found', 'status' => 400];
    echo json_encode($msg);
}




?>