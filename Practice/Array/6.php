<?php
$str = 'one,two,three,four';
$arr = explode(',', $str);

echo "Array ( [0] => ".$str." )\n";

echo "<br>";

$output = "Array ( [0] => ".$arr[0]." [1] => ";
for ($i=1; $i < count($arr); $i++) { 
  $output .= $arr[$i];
  if ($i != count($arr) - 1) {
    $output .= ',';
  }
}
$output .= " )\n";
echo $output;

echo "<br>";

$output = "Array ( [0] => ".$arr[0]." [1] => ".$arr[1]." [2] => ".$arr[2]." )\n";
echo $output;


?>
