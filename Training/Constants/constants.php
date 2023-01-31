<?php

// Constants are like variables except that once they are defined they cannot be changed or undefined

// To create constants we use define() function

// define(name, value, case-insensitive)

define("greeting", "Hello sir, How are you?", true);

define("greeting", "Hello sir, How", true);
echo greeting;




// constant arrays 

define("arr",[1,2,3,4]);
echo "<br>";
print_r(arr);
echo "<br>";
// $pus = array_push($arr,5);
// print_r($pus);




// Constants are automatically global and can be used across the entire script
// echo "<br>";
// function myTest(){
//     echo greeting;
// }

// myTest();


$greeting = "Hello";

echo $greeting;


?>