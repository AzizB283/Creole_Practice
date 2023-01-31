<?php

$num =1; 

while($num<=10){
    if($num%2==0){
        echo "Skipping number $num because it is even";
        echo "<br>";
        $num++;
        continue;
    }else{

        echo "Counter is ",$num;
        echo "<br>";
        $num++;
    }
}


?>