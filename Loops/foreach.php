<?php

// foreach loop through a block of code for each element in array 
// foreach(array as $value)
// foreach(array as $key => $value)

$arr = [1,2,3,4];

foreach($arr as $value){
    echo $value;

}

echo "<br>";
echo "<br>";

// we can also loop through key and value both using foreach loop 

$arr1 = [1=>"Aziz",2=>"Raj",3=>"Sid"];

foreach($arr1 as $key=>$value){
    echo "",$key, " => ",$value;
    echo "<br>";
}

echo "<br>";
echo "<br>";



// loop through every character of string
$str = "Aziz";
$chars = str_split($str);

foreach($chars as $value){
    echo $value."<br>";
}

echo "<br>";
echo "<br>";


$array = [
    [1, 2],
    [3, 4],
];

foreach ($array as list($a, $b)) {
    // $a contains the first element of the nested array,
    // and $b contains the second element.
    echo "A : $a; B : $b\n"; }

    echo "<br>";
    echo "<br>";



    $arr3 = array(1, 2, 3, 4);
    foreach ($arr3 as $value) {
        $value = $value * 2;
        echo $value;
    }
    // $arr is now array(2, 4, 6, 8)
    unset($value); // break the reference with the last element
    var_dump ($value);


    
?>