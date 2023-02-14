<?php

function sorting($str, $bool){
    $length = strlen($str);
    $arr = [];

    for($index = 0; $index < $length; $index++){
        $push = array_push($arr, $str[$index]);
    }

    if($bool == false){
        asort($arr);

        foreach($arr as $val){
            echo $val;
        }
        

    }

    if($bool == true){
        arsort($arr);

        foreach($arr as $val){
            echo $val;
        }
        
    }

}


sorting("bacd",false);
echo "<br>";
sorting("axedzpq", true)
?>