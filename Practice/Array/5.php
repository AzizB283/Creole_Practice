<?php
$temperatures = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];


$sum = array_sum($temperatures);
$average = $sum / count($temperatures);

echo "<br>";


sort($temperatures);
array_unique($temperatures);
$unique=array_unique($temperatures);
print_r($unique);

// get five lowest and highest temperatures
$five_lowest = array_slice($unique, 0, 5);
$five_highest = array_slice($unique, -5);

// display results
echo "Average temperature: $average" . PHP_EOL;
echo "<br>";
echo "Five lowest temperatures: " . implode(", ", $five_lowest);
echo "<br>";
echo "Five highest temperatures: " . implode(", ", $five_highest);




?>



