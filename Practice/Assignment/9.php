<?php

function checkstr($str, $substr){
    
    if(substr_compare($str,$substr,0)){
        echo "true";
        
    }
    else{
        echo "false";
    }
}

checkstr("catapult", "cat");
?>