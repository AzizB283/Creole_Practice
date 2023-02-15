<?php

echo "<h2><center>Static Properties</center></h2>";

echo "<h3>Example 1</h3>";

class Car
{
    public static $carName = "Car : BMW";

}

echo Car::$carName;

echo "<h3>Example 2</h3>";
echo "Using self keyword<br>";

class Bike
{
    public static $bikeName = "Bike : Ducati";

    public static function name(){
        echo self::$bikeName;
    }

}

Bike::name();


echo "<h3>Example 3</h3>";

echo "Using parent keyword<br>";


class Moped
{
    public static $bikeName = "Activa";
}

class Activa extends Moped
{
    public static function scooter(){
        echo parent::$bikeName;
    }
}

Activa::scooter();


echo "<h3>Example 4</h3>";

class Cat  
  {
    public static function makeSound() {
      echo "Meow<br>";
    }

    public static function eat(){
        echo "Mice<br>";
    }
  }


  class Dog 
  {
    public static function makeSound(){
        echo "Bark<br>";
    }

    public static function eat(){
        echo "Cat<br>";
    }
  }

  class Mice   
  {

    public static function makeSound(){
        echo "Squeak<br>";
    }

    public static function eat(){
        echo "Cockroaches<br>";
    }
  }



  
  Cat::makeSound();
  Cat::eat();

  echo "<br>";

  Dog::makeSound();
  Dog::eat();

  echo "<br>";

  Mice::makeSound();
  Mice::eat();


?>