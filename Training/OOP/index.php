<?php

// OOPS concepts

echo "<center><h1>OOPS concepts</h1></center>";

echo "<h2>Class</h2>";

class Car{
    public $name;
    public $price;

    function set_name($name){
        $this -> name = $name;
    }

    function get_name(){
        return $this->name;
    }

    function set_price($price){
        $this -> price = $price;
    }

    function get_price(){
        return $this->price;
    }

}


$bmw = new Car();
$audi = new Car();

$bmw -> set_name('BMW');
$audi -> set_name('Audi');

$bmw -> set_price("50 Lakhs");
$audi -> set_price("45 Lakhs");

echo "Name : ". $bmw->get_name();
echo "<br>";
echo "Price : " . $bmw->get_price();

echo "<br><br>";

echo "Name : ". $audi->get_name();
echo "<br>";
echo "Price : " . $audi->get_price();



echo "<br><br><h2>Instance of</h2>";
echo "check if an object belongs to a specific class<br><br>";

var_dump($bmw instanceof Car);
var_dump($merceds instanceof Car);




    
?>