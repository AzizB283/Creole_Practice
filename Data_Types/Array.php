<?php

// echo "------------------------------------ARRAY DATA TYPE-------------------------------------------";


// echo "<br>";
// echo "<br>";


// $arr = array("BMW","Mercedes","Audi");

// echo "Display array using var_dump method : ";
// echo "<br>";
// var_dump($arr);
// echo "<br>";

// echo "<br>";
// echo "Display array using print_r method";
// echo "<br>";
// print_r($arr);
// echo "<br>";
// echo "<br>";


// echo "Display array using foreach loop";

// foreach($arr as $key=>$value){
//     echo "<br>";
//     echo "",$key," => ",$value;
// }

// echo "<br>";
// echo "<br>";
// echo "<br>";

// echo "Key and Value Array ";
// $arr1 = array("Name"=>"Aziz","Age"=>20,"City"=>"Morbi");
// foreach($arr1 as $key=>$value){
//     echo "<br>";
//     echo " ",$key," =>  ",$value;
// }


// echo "<br>";
// echo "<br>";
// echo "<br>";



// $arr2=array("Name"=>"Aziz",20,45,"Name1"=>"Raj",44);
// foreach($arr2 as $key=>$value){
//     echo "<br>";
//     echo " ",$key," =>  ",$value;
// }

// echo "<br>";
// echo "<br>";

// print_r($arr2);


// echo "<br>";
// echo "<br>";




// echo "<b>2D array :</b>";

// $arr3 = array(
//     array(1,2,3),
//     array(4,5,6)
// );

// $arrlength = count($arr3);
// for($row=0;$row<$arrlength;$row++){
//     echo "<p>Row number $row</p>";
//   for ($col = 0; $col < 3; $col++) {
//     echo "".$arr3[$row][$col]."";
//   }
// }



echo "<br>";
echo "<br>";


$arr4 = array(1=>"a",
"1"=>"b", // the value "a" will be overwritten by "b"
01=>"c", // the value "b" will be overwritten by "c"
"01" =>"f",
-1=>"d");

print_r($arr4);




echo "<br>";
echo "<br>";


$arr5=array(
    '01'=> 'e',
    '1.5'=>'f',
    true=>'g',
    false=>'h',
    0=>'j', // j will overwrite the value of false
    1=>'k'  // k will overwrite the value of true
    
);

print_r($arr5);



$arr6 = array(
    
)

?>