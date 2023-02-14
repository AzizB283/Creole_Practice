<?php


function quote($str){

    $arr = explode("-", "$str");
    // print_r($arr);
    
    
    echo "[";
    for($index = 0; $index < count($arr); $index++){
        if($index == 0 ){
            echo $arr[$index];
        }
        else{
            echo ", ". $arr[$index];
        }
    }

    echo "]";
}

quote('"The unexamined life is not worth living." - Socrates');



?>