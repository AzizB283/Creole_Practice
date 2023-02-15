<?php

echo "<h2><center>Traits</center></h2>";

echo "<h3>Simple example</h3>";

// trait is used for multiple inheritance in php
trait message
{
    public function msg()
    {
        echo "Hello World!";
    }
}

class Welcome
{
    // to use a trait in class use 'use' keyword.
    use message;
}

$obj = new Welcome();
$obj->msg();

echo "<h2>Using multiple traits</h2>";

trait message1
{
    public function msg1()
    {
        echo "This is msg 1<br>";
    }
}

trait message2
{
    public function msg2()
    {
        echo "This is msg 2<br>";
    }
}

class Show
{
    use message1, message2;
}

$msg = new Show();
$msg->msg1();
$msg->msg2();

echo "<br><br><h3>Example 2</h3>";

class Base
{
    public function sayHello()
    {
        echo 'Hello ';
    }
}

trait SayWorld
{
    public function sayHello()
    {
        parent::sayHello();
        echo 'World!';
    }
}

class MyHelloWorld extends Base
{
    use SayWorld;
}

$msg = new MyHelloWorld();
$msg->sayHello();

echo "<h3>Example 3</h3>";
echo "Precedence<br>";

trait Greet
{
    public function sayHello()
    {
        echo 'Hello World!';
    }
}

class Hello
{
    use Greet;
    public function sayHello()
    {
        echo 'Hello Universe!';
    }
}

$o = new Hello();
$o->sayHello();


echo "<h3>Example 4</h3>";

trait A {
    public function smallTalk() {
        echo 'a';
    }
    public function bigTalk() {
        echo 'A';
    }
}

trait B {
    public function smallTalk() {
        echo 'b';
    }
    public function bigTalk() {
        echo 'B';
    }
}

class Talker {
    use A, B {
        B::smallTalk insteadof A;
        A::bigTalk insteadof B;
    }
}


$st = new Talker();

$st -> smallTalk();
$st -> bigTalk();







