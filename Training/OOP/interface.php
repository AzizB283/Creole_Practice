<?php

echo "<center><h2>Interfaces</h2></center>";


interface Animal 
{
    public function makeSound();

    public function eat();

    // public function __construct($name){
    //     $this->name = $name;
    // }
  }

  // can't declare method with a body. Can just declare method name.

  // If you are defining function in interface then you must have to use it in every child class that extends interface

  
  class Cat implements Animal 
  {
    public function makeSound() {
      echo "Meow<br>";
    }

    public function eat(){
        echo "Mice<br>";
    }
  }


  class Dog implements Animal
  {
    public function makeSound(){
        echo "Bark<br>";
    }

    public function eat(){
        echo "Cat<br>";
    }
  }

  class Mice implements Animal  
  {

    public function makeSound(){
        echo "Squeak<br>";
    }

    public function eat(){
        echo "Cockroaches<br>";
    }
  }



  
  $cat = new Cat();
  $cat->makeSound();
  $cat->eat();

  echo "<br>";

  $dog = new Dog();
  $dog -> makeSound();
  $dog->eat();

  echo "<br>";

  $mice = new Mice();
  $mice->makeSound();
  $mice -> eat();


  echo "<h4>Note : can't declare method with a body. Can just declare method name.</h4>";
  echo "<h4>Note : If you are defining function in interface then you must have to use it in every child class that extends interface.</h4>";




?>