<?php

// for loop - loops through a block code for specified number of time 

// syntax - 
// for(starting point, ending point, increament/decrement counter)

// simple for loop 

//if we do x-- here then it will become infinite loop
// for($x=0;$x<=10;$x++){ 
//     echo $x;
//     echo "<br>";
// }


// for($x=20;$x<100;$x+=10){
//     echo $x;
//     echo "<br>";
// }



// using for loop to iterate through array element
// $arr = [1,2,3,4,5];

// for($ele=$arr[0];$ele<count($arr);$ele++){
//     echo $ele;
//     echo "<br>";
// }


$arr2 = ["Aziz","Raj","Sid"];

for($ele=0;$ele<count($arr2);$ele++){
    echo $arr2[$ele];
    echo "<br>";
}





// using array to looping through string

$str = "Aziz";

for($index=0;$index<=strlen($str);$index++){
    echo $str[$index];
    echo "<br>";
}



// for loop in decrement 

for($x=20;$x>1;$x--){
    echo $x;
    echo "<br>";
}



?>