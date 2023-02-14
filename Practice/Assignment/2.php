<?php

$str = "I am an example string";

$length = strlen($str);

for($index=0; $index < $length; $index++){
    // echo $str[$index];
    // echo "<br>";

    if($str[$index] == "a" || $str[$index] == "x"){
    //    echo $str[$i];
    continue;
    }
    else{
        echo $str[$index];
    }
}

?>