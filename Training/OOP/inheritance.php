<?php

echo "<center><h1>Inheritance</h1></center>";

echo "<h2>Public access modifier</h2>";
echo "<h3>Example - 1</h3>";

class Fruit
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro()
    {
        echo "The {$this->name} is a fruit and the color is {$this->color}.<br>";
    }
}

class Tomato extends Fruit
{
    public function message()
    {
        echo "Am I a fruit or a vegetable? <br>";
    }
}

$tomato = new Tomato("Tomato", "red");
$tomato->message();
$tomato->intro();

echo "<br><h3>Example 2 </h3>";

class Foo
{
    public function printItem($string)
    {
        echo 'Foo: ' . $string . "<br>";
    }

    public function printPHP()
    {
        echo 'PHP is great.' . "<br>";
    }
}

class Bar extends Foo
{
    public function printItem($string)
    {
        echo 'Bar: ' . $string . "<br>";
    }
}

$foo = new Foo();
$bar = new Bar();
$foo->printItem('baz'); // Output: 'Foo: baz'
$foo->printPHP(); // Output: 'PHP is great'
$bar->printItem('baz'); // Output: 'Bar: baz'
$bar->printPHP(); // Output: 'PHP is great'

echo "<br><h2>Protected access modifier</h2>";
echo "<h3>Example - 1</h3>";

class Fruit1
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    protected function intro()
    {
        echo "The {$this->name} is a fruit and the color is {$this->color}.<br>";
    }
}

class Tomato1 extends Fruit1
{
    public function message()
    {
        echo "Am I a fruit or a vegetable? <br>";
        $this->intro();
    }
}

$tomato = new Tomato1("Tomato", "red");
$tomato->message();
echo "<br>You can't use intro directly from outside of the class. It'll give us an error<br>";
// $tomato->intro();
echo "But, we can call the intro from inside the tomato class";

echo "<br><br><h2>Overriding inherited method</h2>";
echo "<h3>Example - 1</h3>";

class Fruit2
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro()
    {
        echo "This is Parent class.<br>";
        echo "The {$this->name} is a fruit and the color is {$this->color}.<br>";
    }
}

class Tomato2 extends Fruit2
{
    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro()
    {
        echo "This is Child class.<br>";
        echo "The {$this->name} is a fruit and color : {$this->color}.<br>";
    }
}

$tomato = new Fruit2("Apple", "red");
$tomato->intro();

$tomato = new Tomato2("Tomato", "red");
$tomato->intro();

echo "<br><br><h2>The Final keyword</h2>";
echo "<h3>Example - 1</h3>";
echo "The final keyword can be used to prevent class inheritance or to prevent method overriding.<br><br>";

final class Fruit3
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro()
    {
        echo "The {$this->name} is a fruit and the color is {$this->color}.<br>";
    }
}

// class Tomato3 extends Fruit3
// {
//     public function message()
//     {
//         echo "Am I a fruit or a vegetable? <br>";
//     }
// }

echo "Can't inherit class tomato from class Fruit when we use 'Final' keyword<br>";
$tomato = new Fruit3("Apple", "red");
$tomato->intro();




echo "<br><br><h2>The Multi-level Inheritance</h2>";
echo "<h3>Example - 1</h3>";

class Fruit4
{
    public $name;
    public $color;

    public function __construct($name, $color)
    {
        $this->name = $name;
        $this->color = $color;
    }

    public function intro()
    {
        echo "The {$this->name} is a fruit and the color is {$this->color}.<br>";
    }
}

class Tomato4 extends Fruit4
{
    public function message()
    {
        echo "Am I a fruit or a vegetable? <br>";
    }
}

class Taste extends Tomato4
{
    public function taste1()
    {
        echo "The taste of the {$this->name} is tangy<br>";
        // echo exit;
    }
}

class Size extends Taste
{
    public function size1()
    {
        echo "The size of the tomato is small<br>";
        
    }
}

$tomato2 = new Fruit4("Tomato", "red");
$tomato2->intro();

$tomato1 = new Size("Apple", "Red");
$tomato1->intro();
$tomato1->message();
$tomato1->taste1();
$tomato1->size1();






echo "<h3>Example - 2</h3>";

class Base
{
    function BaseFun()
    {
        echo "BaseFun() called<br>";
    }
}

class Derived1 extends Base
{
    function Derived1Fun()
    {
        echo "Derived1Fun() called<br>";
    }
}

class Derived2 extends Derived1
{
    function Derived2Fun()
    {
        echo "Derived2Fun() called<br>";
    }
}

$dObj = new Derived2();

$dObj->BaseFun();
$dObj->Derived1Fun();
$dObj->Derived2Fun();





echo "<br><br><h2>Hierarchical Inheritance</h2>";
echo "<h3>Example - 1</h3>";


class Base1
{
    function BaseFun()
    {
        echo "BaseFun() called<br>";
    }
}

class Derived3 extends Base
{
    function Derived1Fun()
    {
        echo "Derived1Fun() called<br>";
    }
}

class Derived4 extends Base
{
    function Derived2Fun()
    {
        echo "Derived2Fun() called<br>";
    }
}

$dclass = new Derived4();

$dclass -> BaseFun();
$dclass -> Derived2Fun();
// $dclass -> Derived1Fun(); // Can't access this because you can only access base class using hierarchical inheritance. If you want to access Derived1Fun then you have to create new object for it. Example is given below.


$d3class = new Derived3();

$d3class -> BaseFun();
$d3class -> Derived1Fun();





