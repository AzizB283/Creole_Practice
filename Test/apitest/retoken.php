<?php
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
// $id =$access_token["id"];
$headers =getallheaders();
$authcode =trim($headers['Authorization']);
$token =substr($authcode,7);

$key = "testkey123";

$decoded = JWT::decode($token, new Key($key, 'HS256'));
$access_token =get_object_vars( $decoded );
$user_id =$access_token['id'];

$sqlrt="select * from token where reftoken='$token'";
    $res = mysqli_query($conn, $sqlrt);
    $row = mysqli_num_rows($res);
    $row = mysqli_fetch_assoc($res);
    $retoken=$row['reftoken'];
    $actoken = $row['token'];
    $key ="testkey123";
        if($retoken == $token)
        {
          // $decode_refresh_token =JWT::decode($retoken,new Key($key, 'HS256'));
          // $refresh_token =get_object_vars( $decode_refresh_token );
          // $user_id_refresh_token =$refresh_token['id'];
          //  if($user_id_refresh_token == $token){
                  $payload= array("id"=>$user_id, "expire"=>time()+120);
                  $payload_refresh =array("id"=>$user_id, "expire"=>time()+1200);
                if($payload){
                    $jwt_token =JWT::encode($payload,$key,'HS256');
                    $jwt_refresh_token =JWT::encode($payload_refresh,$key,'HS256');
                    $arr['jwt'] = $jwt_token;
                    $date = date('Y-m-d H:i:s');
                    $sql_token ="update token set token='$jwt_token',reftoken='$jwt_refresh_token',updated='$date' where reftoken='$token'";
                    // $sql_rtoken="update token set reftoken='' where user_id='$id'";
                    if(mysqli_query($conn, $sql_token)){
                      echo json_encode(array('message'=>'Your new token is','Data'=>$arr));
                    }
                  }
                  else{
                    echo json_encode(array('message'=>'you are not registered','status'=>false));
                  }
              }
            //}
        else{
          echo json_encode(array('message'=>'you refresh token is not set','status'=>false));
        }
?>