<?php

echo "<center><h1>Constructor Destructor</h1></center>";

echo "<h2>Constructor</h2>";

echo "Using __costruct keyword<br><br>";


class Car{

    public $name;
    public $price;
    public $type;
    public $color;

    public function __construct()
    {
        $arguments = func_get_args();
        $numberOfArguments = func_num_args();

        if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        }
    }

    public function __construct2($name, $price)
    {
        $this->name = $name;
        $this->price = $price;

        echo "Name : ".$name."<br>";
        echo "Price : ".$price."<br>";
        echo "<br>";
    }

    public function __construct3($name, $price, $type)
    {
        $this->name  = $name;
        $this->price = $price;
        $this->type  = $type;

        echo "Name : ".$name."<br>";
        echo "Price : ".$price."<br>";
        echo "Type : ".$type."<br>";
        echo "<br>";

    }

    public function __construct4($name, $price, $type, $color)
    {
        $this->name  = $name;
        $this->price = $price;
        $this->type  = $type;
        $this->color = $color;

        echo "Name : ".$name."<br>";
        echo "Price : ".$price."<br>";
        echo "Type : ".$type."<br>";
        echo "Color : ".$color."<br>";
        echo "<br>";

        }


    public function getName(){
        return $this -> name;
    }

    
    public function getPrice(){
        return $this -> price;
    }

    public function getType(){
        return $this -> type;
    }

    
    public function getColor(){
        return $this -> color;
    }

   

    
}


$mercedes = new Car("Mercedes", "1 Cr");
$mercedes = new Car("Mercedes", "1 Cr", "Sedan");
$mercedes = new Car("Mercedes", "1 Cr", "Sedan", "Black");






echo "<h2>Example 2</h2>";


class Employee
{
  private $first_name;
  private $last_name;
  private $age;
 
  public function __construct($first_name, $last_name, $age)
  {
    $this->first_name = $first_name;
    $this->last_name = $last_name;
    $this->age = $age;
  }


  public function getFirstName()
  {
    return $this->first_name;
  }
  public function getLastName()
  {
    return $this->last_name;
  }
  public function getAge()
  {
    return $this->age;
  }

  function __destruct(){
    echo "The destruct function is called<br>";
    echo "The name of employee is {$this->first_name} and the age is {$this->age} <br>";
}
}


$objEmployee = new Employee('Bob', 'Smith', 30);
echo $objEmployee->getFirstName();
echo "<br>"; 
echo $objEmployee->getLastName(); 
echo "<br>"; 
echo $objEmployee->getAge(); 



echo "<h2>Destructor</h2>";

echo "Using __destruct keyword<br>";

?>