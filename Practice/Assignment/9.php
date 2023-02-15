<?php

function checkstr($str, $substr){
    
    // if(strstr($str, $substr)){
    //     echo "true";
        
    // }
    // else{
    //     echo "false";
    // }


    if(preg_match("/{$substr}/",$str)){
        echo "true";
    }
    else{
        echo "false";
    }
}

checkstr("catapult", "cat");
echo "<br>";
checkstr("hello","leo");
?>