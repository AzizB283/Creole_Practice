<?php

// To create variables in php use $ sign

$str = "Hello";
$num1 = 44;
$num2 = 120.45;


var_dump($str);
echo "<br>";
var_dump($num1);
echo "<br>";
var_dump($num2);
echo "<br>";


// cannot declare variable starting from number 

// $1num1 = 1; Like this - It will throw an error 


// Can also declare variable that starts from underscore(_)
// Can contain alphanumeric and underscore 

$_num1 = 1;


// echo statement is used to output the data to screen 
echo "This variable contian alphanumeric and underscore : ", $_num1;

// Names are case sensitive 

$age = 20 ; 
$AGE = 21 ;

echo "<br>";
echo "Variable is small age : ", $age;
echo "<br>";
echo "Variable is capital AGE : ", $AGE;










?>