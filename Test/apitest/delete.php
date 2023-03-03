<?php
header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods:DELET');
header('Access-Control-Allow-Headers:*');
header('Content-Type:application/json');

include 'validate.php';
$sql= "SELECT * FROM token WHERE token ='$token'";
    $result =mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0){
        $sql_logout ="DELETE FROM token WHERE token ='$token'";
        if(mysqli_query($conn, $sql_logout)){
            echo json_encode(array('message'=>'you are sucessfully logout'));
        }
    }else
    {
        echo json_encode(array('message'=>'you are not login, first login'));
    }
?>