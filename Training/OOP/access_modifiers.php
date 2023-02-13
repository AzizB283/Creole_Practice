<?php

echo "<center><h1>Access Modifiers</h1></center>";

class Fruit {
    public $name;
    public $color;
    public $weight;
  
    function set_name($n) {  
      $this->name = $n;
    }
    protected function set_color($n) { 
      $this->color = $n;
    }
    private function set_weight($n) { 
      $this->weight = $n;
    }
  }
  
  $mango = new Fruit();
  $mango->set_name('Mango'); // OK
//   $mango->set_color('Yellow'); // ERROR
//   $mango->set_weight('300'); // ERROR



echo "<h2>Public Access</h2>";

class Person
{
  public $name;
  public function getName()
  {
    return $this->name;
  }
}
$person = new Person();
$person->name = 'Bob Smith';
echo $person->getName(); // prints 'Bob Smith'





echo "<h2>Private Example</h2>";

class Person1
{
  private $name;
  public function getName()
  {
    return $this->name;
  }
  public function setName($name)
  {
    $this->name = $name;
  }
  
}

class child extends Person1 
  {
    function setName($name){
    $this->name = $name;
    }
    function getName(){
    echo $this->name;
    }
}

$person = new Person1();
// $person->name = 'Bob Smith'; // Throws an error 
$person->setName('Aziz B');
echo $person->getName(); // prints 'Bob Smith'



echo "<h2>Protected Example</h2>";

$person = new child();

$person->setName("Aziz");
$person -> getName();
echo "<br>";


echo "-------------------------------------------------------------------------------";



class ParentClass {

    protected $parentMsg = "protected parent attribute<br>";
    
    protected function parentDisplay() {
        echo "protected parent method<br>";
        echo $this -> parentMsg;
    }
}

class ChildClass extends ParentClass {

    protected $childMsg = "Protected Child attribute.<br>";
    
    public function childDisplay() {
        echo "Public Child method to display protected parent members:<br>";
        $this->parentDisplay();
    }

}

// $parent = new ParentClass();
// $parent->parentDisplay();


echo "<br>";
$children = new ChildClass();
$children -> childDisplay();


?>