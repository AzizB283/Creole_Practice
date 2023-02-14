<?php


echo "<center><h2>Contants</h2></center>";

echo "<h3>Example 1</h3>";

class Msg
{
    const Message = "Thank you for shopping with us.<br>";
}

echo Msg::Message;


class Goodbye
{
    const LEAVING_MSG = "Thank you for shopping with us.<br>";

    public function byebye(){
        echo self::LEAVING_MSG;
    }
}

$goodbye = new Goodbye();
$goodbye -> byebye();



echo "<h3>Example 2</h3>";


class MyClass
{
    const CONSTANT = 'constant value';

    function showConstant() {
        echo  self::CONSTANT . "<br>";
    }
}

echo MyClass::CONSTANT . "<br>";

$classname = "MyClass";
echo $classname::CONSTANT . "<br>";

$class = new MyClass();
$class->showConstant();

echo $class::CONSTANT."<br>";


echo "<h3>Example 3</h3>";

const ONE = 1;
class foo {
    const TWO = ONE * 2;
    const THREE = ONE + self::TWO;
    const SENTENCE = 'The value of THREE is '.self::THREE;
}

echo foo::TWO;
echo "<br>";
echo foo::THREE;



echo "<h3>Example 4</h3>";

class Fooo {
    public const BAR = 'bar';
    private const BAZ = 'baz';
}
echo Fooo::BAR, "<br>";
echo Fooo::BAZ, "<br>";
?>