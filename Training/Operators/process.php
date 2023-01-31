<?php

if(!isset($_POST['submit'])){

    $output= $_POST['operator'];
    $num1 = $_POST['num1'];
    $num2=$_POST['num2'];
    switch($output){


        case 'add':
            echo "The addition of number 1 and number 2 is : ",$num1+$num2;
            break;
            
            
        case 'sub':
            echo "The subtraction of number 1 and number 2 is : ",$num1-$num2;
            break;



        case 'mul':
            echo "The multiplication of number 1 and number 2 is : ",$num1*$num2;
            break;



        case 'div':
            echo "The division of number 1 and number 2 is : ",$num1/$num2;
            break;


        case 'mod':
            echo "The modulo of number 1 and number 2 is : ",$num1%$num2;
            break;

        case 'exp':
            echo "The exponential of number 1 and number 2 is : ",$num1**$num2;
            break;


        case 'asadi':
            echo "The assignment addition of num1 and num2 is : ",$num1+=$num2;
            break;

        case 'assub':
            echo "The assignment subtraction of num1 and num2 is : ",$num1-=$num2;
            break;

        case 'asmul':
            echo "The assignment multiplication of num1 and num2 is : ",$num1*=$num2;
            break;

        case 'asdiv':
            echo "The assignment division of num1 and num2 is : ",$num1/=$num2;
            break;

        case 'asmod':
        echo "The assignment modulo of num1 and num2 is : ",$num1%=$num2;
        break;


        case 'dbleql':
            echo "The num1 and num2 are equal or not ? : ";
            var_dump($num1==$num2);
            break;

        case 'tpleql':
            echo "The num1 and num2 are strict equal or not ? : ";
            var_dump($num1===$num2);
            break;

        case 'noteql':
            echo "This return true if num1 and num2 are not equal : ";
            var_dump($num1!=$num2);
            break;

        case 'grtr':
            echo "This return true if num1 is greater than num2 : ";
            var_dump($num1>$num2);
            break;

        case 'lsthn':
            echo "This return true if num1 leass than num2: ";
            var_dump($num1<$num2);
            break;

        case 'grtreql':
            echo "This return true if num1 is greater than equal to num2 : ";
            var_dump($num1>=$num2);
            break;
    
        case 'lsthneql':
            echo "This return true if num1 leass than equal to num2: ";
            var_dump($num1<=$num2);
            break;

        case 'preincr':
            echo "This is pre-increament of num1 : ";
            var_dump(++$num1);
            break;
    
        case 'postincr':
            echo "This is post-increament of num1 : ";
            var_dump($num1++);
            break;
    
        case 'predecr':
            echo "This is pre-derement of num1 : ";
            var_dump(--$num1);
            break;
        
        case 'postdecr':
            echo "This is post decrement of num1 : ";
            var_dump($num1--);
            break;


        case 'and':
            echo "True if both num1 and num2 are true : ";
            var_dump($num1&&$num2);
            break;
        
        case 'or':
            echo "True if either one is true : ";
            var_dump($num1||$num2);
            break;
        
        case 'xor':
            echo "True if either one is true, but both not : ";
            var_dump($num1 xor $num2);
            break;
            
        case 'not':
            echo "True if num1 is not true : ";
            var_dump(!$num1);
            break;


        default : 
        echo "Please valid input";


    }
}

?>