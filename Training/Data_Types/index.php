<?php
// php supports the following data types 
// String, Integer, Float, Boolean, Array, Object, NULL, Resource


// String - Contain sequence of characters

echo "-------------------------------------STRING DATA TYPE---------------------------";
echo "<br>";
echo "<br>";
$str = "String";
echo "This is a <b>",$str,"</b> data type.<br>";
echo 'This line is printed using single quote';
echo "<br>This line is printed using double quote";


// Outputs: He said: "I'll be back"
echo "<br>He said : \"I'll be back\" ";


echo "<br>";
echo <<< END
      a
      b
      c
END;

echo "<br>";





// ---------------- Integer Data type --------------------------------

// An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.

echo "<br>";
echo "<br>";
echo "---------------------------------------- INT DATA TYPE-------------------------------------";
echo "<br>";
echo "<br>";

$number = 8160739392012;

echo $number;
echo "<br>";
var_dump($number);


echo "<br>";
echo "<br>";


// Hexadecimal  - Syntax : 0[xX][0-9]

$hexnum = 0x1A;
echo "Hexadecimal conversion of 1A: ",$hexnum;



// Octal - Syntax : 0[oO][0-9]

$octnum = 015;
echo "<br>";

echo "Octal conversion of 18 : ",$octnum;



// Binary - syntax : 0[bB][0-9]

echo "<br>";

$bin = 0b01010;

echo "Binary conversion of 01010 : ",$bin;




// -----------------------------------------------Float Data type --------------------------------------

echo "<br>";
echo "<br>";
echo "<br>";
echo "--------------------------------------FLOAT DATA TYPE---------------------------------------";
echo "<br>";
echo "<br>";





// A float (floating point number) is a number with a decimal point or a number in exponential form

$flt = 10.98;
var_dump($flt);

$newfloat = 10.9090909090909000909090909000099;
echo "<br>";
echo "Float rounds up after 12 digits : ",
var_dump($newfloat);


echo "<br>";
echo "<br>";


$a = 1.234; 
$b = 1.2e5; 



echo "Output of 1.234 =>",$a,"<br>";
echo "Output of 1.2e5 - e meaning gives that much numbers after point ",$b,"<br>";
echo "<br>";
echo "<br>";
echo "<br>";



echo "-----------------------------------BOOLEAN DATA TYPE-----------------------------------------";

echo "<br>";
echo "<br>";


$x = true;
$y = false;

var_dump($x);
echo "<br>";
var_dump($y);


echo "<br>";
$bvar = 0;
var_dump("If we assign 0 to a variable then result of boolean is : ",(bool) $bvar); 


echo "<br>";
$bvar1 = 1;

var_dump("If we assign 1 to a variable then result of boolean is : ",(bool) $bvar1); 


echo "<br>";

$boolnull = NULL;

var_dump("If we assign NULL to a variable then result of boolean is : ",(bool) $boolnull);


echo "<br>";

$emptyvar = "";

var_dump("If we assign empty variable then result of boolean is : ",(bool) $emptyvar);


echo "<br>";

$falsestr = "false";

var_dump("If we assign 'false' string to a variable then result of boolean is : ",(bool) $falsestr);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

?>