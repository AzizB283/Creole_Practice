<?php
$n = 5;

for($row=0;  $row<=$n;  $row++){
    for($col = $n; $col >= $row ; $col--){
        echo "&nbsp;";
    }
    for($str = 1; $str <= $row ; $str++){
        echo "*";
    }   
    echo "<br>";
    }
 

?>