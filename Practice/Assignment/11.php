<?php

$str = "I am a string";

$length = strlen($str);

// echo $length;


for ($index = 0 ; $index < $length ; $index++){
    // echo $str[$index];

    if($index%2==0){
            echo ucfirst($str[$index]);

        }
        
    else{
        echo $str[$index];
    }
}



?>