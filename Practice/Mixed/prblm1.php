<?php

$num = $_POST['num'];

if(isset($_POST['num'])){
    $sum=0;

    for($index=0;$index<$num;$index++){
        if($index%2==0){
            $sum=$sum+$index;
        }
    }
        
       
    

    echo "The sum of the even number is : $sum";
}

?>