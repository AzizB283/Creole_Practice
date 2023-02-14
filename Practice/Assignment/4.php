<?php

function repeat($str){
    $length = strlen($str);
    $arr = [];  

    for($index = 0; $index < $length; $index++){

        
        
        if(in_array($str[$index], $arr)){
            print_r($str[$index]);
        }
        else{
            
            $push = array_push($arr, $str[$index]);
            // echo $str[$index];
        }
    }


}

repeat("abcddef");

echo "<br>";

repeat("tfghhhplffzaaa");
?>


