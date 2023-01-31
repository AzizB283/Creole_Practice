<pre> 
    <?php

$str = 'one,two,three,four';

$arr = explode(",",$str);

$chunk = array_chunk($arr,4);

// $arr[0]=$str;

print_r($chunk);

echo "<br>";

print_r(array_chunk($arr,1));


echo "<br>";

print_r(array_chunk($arr,3));

?>
<pre>