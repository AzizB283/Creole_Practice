<?php

// It is a super global variable that can be accesible from anywhere  also within functions and methods

echo "<h3>GLOBALS</h3>";

// PHP stores all global variables in an array called $GLOBALS[index]. The index holds the name of the variable


 $x = 75;
 $y = 25; 

function add(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    $x = 20;
    $y = 30;
    $z = $x + $y;
    echo "Sum of x and y in local variable : ", $z;
}
add();
echo "<br>Sum of x and y in GLOBAL variable :", $z;



echo "<br>";
echo "<br>";

function test() {
    $foo = "local variable";

    echo '$foo in global scope: ' . $GLOBALS["foo"] . "<br>";
    echo '$foo in current scope: ' . $foo . "\n";
}

$foo = "Example content";
test();








?>