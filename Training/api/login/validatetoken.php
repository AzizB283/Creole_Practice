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
use Firebase\JWT\Key;

$headers = getallheaders();
$authcode = trim($headers['Authorization']);
$token = substr($authcode,7);
$key = "examplekey";
$expiration_time = time() + 3000;


try {
    $decoded = JWT::decode($token, new Key($key, 'HS256'), array('exp' => $expiration_time));
    $msg = ['msg' => 'Access Allow', 'status' => 200, 'Data'=>$decoded];
    echo json_encode($msg);
    
} catch (Exception $e) {
    // throw $e;
    $msg = ['msg' => 'Access Denied', 'status' => 200, 'Data'=>$e->getMessage()];
    echo json_encode($msg);
}


?>