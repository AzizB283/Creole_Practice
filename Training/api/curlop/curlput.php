<?php

$ch = curl_init();
$url = "https://reqres.in/api/users/2";



$data_array = array(
    "name" => "Aziz B",
    "age" => 20
);

$data = http_build_query($data_array);

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$resp = curl_exec($ch);

if($error = curl_error($ch)){
    echo $error;
}
else{
    $decoded = json_decode($resp);
    foreach($decoded as $key => $value){
        echo $key . " => ". $value;
        echo "<br>";
    }
}


curl_close($ch);


?>