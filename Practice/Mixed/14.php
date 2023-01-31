<?php
$gen_string = "This is tutorial that enables string xxx in PHP";
$count = str_word_count($gen_string);
echo $count;
echo "<br>";

$substr = substr_count($gen_string,"This is tutorial that enables string xxx in PHP");

echo $substr;


?>