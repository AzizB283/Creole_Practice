<?php
$arr_variable=array('PHP','MYSQL','JAVA');
$arrlen = count($arr_variable);
for($index=0;$index<$arrlen;$index++){
    echo "The element [$index]:";
    echo($arr_variable[$index]);
    echo "<br>";
}

?>