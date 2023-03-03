<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods:GET, POST, OPTIONS');
header('Access-Control-Allow-Headers:*');
header('Content-Type: application/json');
include 'db.php';
include 'phpjwt/src/BeforeValidException.php';
include 'phpjwt/src/ExpiredException.php';
include 'phpjwt/src/JWK.php';
include 'phpjwt/src/JWT.php';
include 'phpjwt/src/SignatureInvalidException.php';
include 'phpjwt/src/CachedKeySet.php';
include 'phpjwt/src/Key.php';
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
$data = json_decode(file_get_contents("php://input"), true);
// $token = trim($data['jwt']);
// //$token = substr($authcode,7);
$headers =getallheaders();
$authcode =trim($headers['Authorization']);
$token =substr($authcode,7);
// echo $token;
$key = "testkey123";
try {
    $decoded = JWT::decode($token, new Key($key, 'HS256'));
    $access_token =get_object_vars( $decoded );
    $user_id =$access_token['id'];
    $sqlv="select * from token where token='$token'";
    $res = mysqli_query($conn, $sqlv);
    $row = mysqli_num_rows($res);
    $row = mysqli_fetch_assoc($res);
    if($row>=1){
        // echo $row['token'];
        if($row['token']==$token){
            if($access_token['expire'] < time()){
                $message =" Your token is expired Acess Denied";
                echo json_encode($message);
                // include 'retoken.php';        // this code is for regeneration of code
                // exit();
            }
            else{
                $message =['msg'=>'Access Granted','status'=>true,'Data'=>$decoded];
                echo json_encode($message);
            }
        }
        else{
            $message =['msg'=>'Token does not match','status'=>false];
            echo json_encode($message);
            exit();
        }
    }
    
} catch (Exception $e) {
    $msg = ['msg' => 'Access Denied', 'status' => false, 'data'=>$e->getMessage()];
    echo json_encode($msg);
    exit();
}

?>






