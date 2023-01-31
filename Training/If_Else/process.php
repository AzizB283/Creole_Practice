<?php

$age = $_POST['age'];

if(isset($_POST['age'])){
    if($age<16){
        echo "You can't drive anything,\n Your age is under 16";
    }elseif($age>=16 && $age<18){
        echo "You can only drive moped as your age is between 16 and 18";
    }else{
        echo "You can drive car, bike, etc...";
    }
}

?>