<?php
// echo has no return value while print has a return value of 1 so it can be used in expressions

echo "Output using 'echo'";
echo "<br>";

print("Output using 'print'");

echo "<br>";

$num1 = 5;
$num2 = 4;

print $num1 + $num2;


// when used without parentheses, echo can take several arguments 
echo "<br>Hello", " ", "How r u", "!"; //This is valid.
// print "How ", "are ", "you "; //This is invalid.



// print return 1 while echo does not 
$lang = "PHP";  
echo "<br>";
     $ret = print $lang." is a web development language.";  
     print "</br>";  
print "Value return by print statement: ".$ret;  
echo "<br>";

// $ret = echo $lang." is a web development language.";
// echo "Value return by echo statement: ".$ret;   




?>