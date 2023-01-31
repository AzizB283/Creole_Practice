<?php

$str="";

for ($i = 0; $i < 9; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= 9 - $i; $k++) {
        echo $k;
    }
    for ($l = 9 - $i - 1; $l >= 1; $l--) {
        echo $l;
    }
    echo "<br>";
}

?>