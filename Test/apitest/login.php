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
use Firebase\JWT\JWT;
$data = json_decode(file_get_contents("php://input"), true);
// $name=$data['name'];
$email = $data['email'];
$password=md5($data['password']);
$sql = "SELECT * FROM apilogin WHERE email = '$email'";
$res = mysqli_query($conn, $sql);
 $row = mysqli_num_rows($res);
 $row = mysqli_fetch_assoc($res);
$arr = [];
if($row > 0){
    
    $id=$row['id'];
//    $verify= password_verify($password,$row['password']);
   
//    echo $verify;
   $privateKey="testkey123";
   $payload = array(
    "id" => $row['id'],
    "expire"=>time()+120
     );
        if($password == $row['password']){
            $jwt = JWT::encode($payload, $privateKey, 'HS256');
            $payload2 = array(
                "id" => $row['id'],
                "expire"=>time()+1200
                 );
                 $jwt2 = JWT::encode($payload2, $privateKey, 'HS256');
                //  $sqltupdate="insert into token (token='$jwt' where id='$id'";
                 $sqlrinsert="insert into token (user_id,token,reftoken) values('$id','$jwt','$jwt2')";
                 if(mysqli_query($conn,$sqlrinsert)){
                    $arr['name']=$row['name'];
                    $arr['token']=$jwt;
                    $arr['reftoken'] = $jwt2;
                    $msg = ['msg' => 'login Successfully', 'status' => true, 'data'=>$arr];
                 }else{
                    echo "errr in query";
                 }
        }else{
            $msg = ['msg' => 'login fail', 'status' => false, 'data'=>null];
        }
    echo json_encode($msg);
}
else{
    $msg = ['msg' => 'No Record Found', 'status' => false];
    echo json_encode($msg);
}
?>