<?php

$arr_num = array(5,10,15,20,25);

foreach($arr_num as $num){
    echo $num;
    echo "<br>";
}

function fn1($arr_num){
    return 2*$arr_num;
}

print_r(array_map("fn1",$arr_num));





?>