<?php

$temp = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76,
73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);

$count = count($temp);
// echo $count;
$sum = 0;

foreach($temp as $ele){
    $sum+=$ele;
}

$avg = $sum/$count;
echo "The average is : ",$avg;

echo "<br>";


sort($temp);

// foreach($temp as $high){

//         echo $high;
//         echo "<br>";
// }
// echo "<br>";

// print_r($temp);
// echo "<br>";



for($index=$temp[0];$index<$temp[5];$index++){
    echo $index;
    echo "<br>";
}



?>