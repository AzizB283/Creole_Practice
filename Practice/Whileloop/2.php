<?php

$num = 1;

while ($num<=100){
    if($num%2!==0 || $num%3==0){
        // echo "<br>";
        $num++;
        continue;
    }else{

        echo $num;
        echo "<br>";
        $num++;
    }
}


?>