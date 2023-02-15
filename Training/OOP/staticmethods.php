<?php

echo "<h2><center>Static Methods</center></h2>";

// static methods can be called directly without intializing it

echo "<h3>Example 1</h3>";

class ClassName
{
    public static function staticMethod()
    {
        echo "Hello World!";
    }
}

// don't need to use this method
// $smethod = new ClassName();
// $smethod -> staticMethod();

// Like this
ClassName::staticMethod();

echo "<h3>Example 2</h3>";

class Hello
{
    public function greet()
    {
        echo "Hello, How r u?";
    }
}

Hello::greet();

echo "<h3>Example 3</h3>";

class Car
{
    public function bmw()
    {
        echo "This is BMW M8 - Gran Coupe";
    }

    public function __construct()
    {
        self::bmw();
    }

}

new Car();

echo "<h3>Example 4</h3>";

class Bike
{
    public static function ducati()
    {
        echo "This is Ducati";
    }
}

class OtherBike
{
    public function hayabuza()
    {
        Bike::ducati();
    }
}

OtherBike::hayabuza();

echo "<h3>Example 5</h3>";
echo "Using inheritance - Parent keyword<br>";

class Bike1
{
    public static function ducati()
    {
        echo "This is Ducati";
    }
}

class OtherBike1 extends Bike1
{
    public function hayabuza()
    {
        parent::ducati();
    }
}

OtherBike1::hayabuza();
