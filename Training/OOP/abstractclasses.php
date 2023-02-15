<?php

echo "<center><h2>Abstract Classes</h2></center>";

// Parent class
abstract class Car
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    abstract public function intro();

//    abstract public function msg();
}


//    Can't use method in abstract class without using abstract keyword before declaring method
//    If you are defining function in abstract class then you must have to use it in every child class that extends abstract class


// Child classes
class Audi extends Car
{
    public function intro()
    {
        return "Choose German quality! I'm an $this->name!";
    }

    public function msg(){
        echo "Hello";
    }
}

class Volvo extends Car
{
    public function intro()
    {
        return "Proud to be Swedish! I'm a $this->name!";
    }
}

class Citroen extends Car
{
    public function intro()
    {
        return "French extravagance! I'm a $this->name!";
    }
}

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";
echo $audi->msg();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();

echo "<br>";

echo "<h3>Note : Can't use method in abstract class without using abstract keyword before declaring method.</h3>";



echo "<h3>Note : If you are defining function in abstract class then you must have to use it in every child class that extends abstract class.</h3>";



echo "<br><br><br><h3>Example 2 </h3>";

abstract class Bike 
{
    // public function __construct($name){
    //     $this->name = $name;     
    // }
   abstract protected function bname();
}

class FZ extends Bike 
{
    public function bname(){

        echo "This is fz class";
    }
}

$fz = new FZ("FZ");

$fz -> bname();


?>