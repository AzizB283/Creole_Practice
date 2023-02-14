<?php

$str= "I am a string";
$length = strlen($str);

for($index = $length ; $index >= 0 ; $index--){
    
    echo $str[$index];
}

?>