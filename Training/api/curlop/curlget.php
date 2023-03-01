<?php

$ch = curl_init();

$url = "https://reqres.in/api/users?page=2";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if($error = curl_error($ch)){
    echo $error;
}
else{
    $decode = json_decode($resp, true);
    print_r($decode);
}

curl_close($ch);
?>