<?php declare(strict_types=1);

echo "<h3>Output using User defined functions</h3>";

function simpleFunction(){
    echo "Hello, How are you?";
}

simpleFunction();


echo "<h3>Pass arguments</h3>";

function details($name,$age){
    echo "My name is $name and my age is $age.";
}

details("Aziz",20);
echo "<br>";
details("Raj",21);
echo "<br>";
details("Sid",21);




// add numbers using function

echo "<h3>Add numbers using function</h3>";

function add(int $num1,int $num2){
    echo $num1+$num2;
}

add(4,5);
echo "<br>";
add(54,89);
echo "<br>";
add(3452,8786);
echo "<br>";
// add(342,"sdfj");



// Pass n number of arguments

echo "<h3>Pass n number of arguments to a function</h3>";

function nadd(...$num){
    $sum=0;
    foreach($num as $n){
        $sum+=$n;
    }

    return $sum;
}

echo nadd(1,2,3,4);
echo "<br>";
echo nadd(1,2,5,6,5,4,8,9);
echo "<br>";
echo "<h4>php will give warning if you try to put string in argument </h4>";
echo nadd(5,"5abcd","sdf");



// Default argument value 
echo "<h3>Default argument value</h3>";

function darg($name = "Aziz"){
    echo "The name is $name";

}
echo "Aziz is default name, when don't pass any arguments it will display default value";
echo "<br>";
darg();
echo "<br>";
darg("Sid");



// Functions - Return values 

echo "<h3>Return values using functions</h3>";

function square($num){
    return $num*$num; 
}

echo "The square of 4 is : ";
echo square(4);

echo "<br>";

echo "The square of 13 is : ";
echo square(13);

echo "<br>";

// Return type declaration 

function addNumbers(float $num1, float $num2){
    return (int)($num1+$num2);
}

echo "Numbers are 1.5 and 5.2 - ";
echo addNumbers(1.5,5.2);

echo "<br>";

echo "Numbers are 1.6 and 5.6 - ";
echo addNumbers(1.6,5.6);

echo "<br>";

echo "Numbers are 1.2 and 5.4 - ";
echo addNumbers(1.2,5.4);

echo "<br>";

echo "Numbers are 1.5 and 5.5 - ";
echo addNumbers(1.5,5.5);


// Pass by refrence 

echo "<h3>Pass by Refrence</h3>";

function expo(&$num){
    echo $num**$num;
}

$num1=5;
expo($num1);

echo "<br>";

// Function inside function 

function foo(){
    echo "This is function foo";
    function bar(){
        echo "This is function bar";
    }
}

foo();
echo "<br>";
bar(); // This will not be called until we call foo function 

echo "<br>";


echo "<h3>Fibonacci Series</h3>";
function Fibonacci($number){
      

    if ($number == 0)
        return 0;    
    else if ($number == 1)
        return 1;    
      

    else
        return (Fibonacci($number-1) + 
                Fibonacci($number-2));
}
  

$number = 10;
for ($counter = 0; $counter < $number; $counter++){  
    echo Fibonacci($counter),' ';}



    echo "<br>";
    echo "<br>";
    // Arrow function 

echo "<h3>Arrow Function</h3>";

$function1 = fn($num1,$num2) => $num1+$num2;
echo $function1(1,2);




?>