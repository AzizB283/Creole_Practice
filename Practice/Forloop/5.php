<?php


function num($n){
    $val =1;

    for($row=1;  $row<=$n;  $row++){
        for($col = 1; $col <= $row ; $col++){
            echo " $val ";
            $val++;
        }
            echo "<br>";
        }   
    }

 num(5);

?>