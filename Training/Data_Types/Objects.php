<?php



 class detail{

     public function __construct($name,$age){
         $this->name=$name;
         $this->age=$age;
         echo $this->name;
         echo "<br>";
         echo $this->age;
        //  echo $this.age;
         
         
         
         return "My name is ". $this->name." and age is ".$this->age;
        }
    }

$mydetail = new detail("Aziz",20);
echo $mydetail;

?>