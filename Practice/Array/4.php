<?php
$arr =array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

echo "<h3>a) - ascending order sort by value</h3>";
echo "<br>";

asort($arr);

foreach($arr as $key => $val){
    echo $key , "=>", $val;
    echo "<br>";
}


echo "<h3>b) - ascending order sort by key</h3>";
echo "<br>";

ksort($arr);

foreach($arr as $key => $val){
    echo $key , "=>", $val;
    echo "<br>";
}



echo "<h3>c) - descending order sort by value</h3>";
echo "<br>";

arsort($arr);

foreach($arr as $key => $val){
    echo $key , "=>", $val;
    echo "<br>";
}


echo "<h3>d) - descending order sort by key</h3>";
echo "<br>";

krsort($arr);

foreach($arr as $key => $val){
    echo $key , "=>", $val;
    echo "<br>";
}
?>