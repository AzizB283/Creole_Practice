<?php
$arr_num=array(5,10,15,20,25);

foreach($arr_num as $num){
    echo $num;
    echo "<br>";

    if($num===15){
        
        break;
    }
}

?>