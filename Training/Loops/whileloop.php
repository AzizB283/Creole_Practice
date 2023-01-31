<?php
// The while loop - Loops through a block of code as long as the specified condition is true.
// syntax : while (till condition is true){}

$x = 1 ;

while ($x<=5) {
    echo $x;
    echo "<br>";
    $x++;  // if do x-- it will become infinite loop
}

echo "<br>";
echo "<br>";


// using while loop to iterate through array element
$arr = ["Aziz","Raj","Sid"];
$ele = 0;
while($ele<count($arr)){
    echo $arr[$ele];
    echo "<br>";
    $ele++;
}


echo "<br>";
echo "<br>";

//This example counts to 100 by tens

$y = 10;

while($y<=100){
    echo $y;
    echo "<br>";

    $y+=10;
}









?>