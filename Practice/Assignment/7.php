<?php

function sorting($str, $bool){
    $length = strlen($str);
    $arr = [];

    for($index = 0; $index < $length; $index++){
        $push = array_push($arr, $str[$index]);
    }

    // print_r($arr);

    if($bool == false){
        $alpha = asort($arr);
 
        if($alpha == $arr){
            echo "true";
        }

        else{
            echo "false";
        }
        
        

    }

    if($bool == true){
        $revalpha = arsort($arr);


        if($revalpha == $arr){
            echo "true";
        }
        else{
            echo "false";
        }
        
    }

}


sorting("abbcddeikl",false);
echo "<br>";
sorting("jheca", true);



?>