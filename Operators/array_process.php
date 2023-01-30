<pre>

<?php


if(!isset($_POST['submit'])){

    $output= $_POST['operator'];
    $arr1 = explode(",",$_POST["arr1"]);
    $arr2 = explode(",",$_POST['arr2']);
    $resarr2 = array_fill(count($arr2),3,$arr2);

    

    
    switch($output){


        case 'union':
            echo "The union of array 1 and array 2 is : ";
            $starr1 = array(1=>$arr1[0],2=>$arr1[1],3=>$arr1[2],4=>$arr1[3]);
            $starr2 = array(5=>$arr2[0],6=>$arr2[1],7=>$arr2[2],8=>$arr2[3]);
            $union =$starr1+$starr2;
            print_r($union);
            break;
            
            
        case 'eqlt':
            echo "Returns true if arr1 and arr2 have the same key/value pairs : ";
            var_dump($arr1==$arr2);
            break;



        case 'strcteqlt':
            echo "Returns true if arr1 and arr2 have the same key/value pairs with same type : ";
            var_dump($arr1===$arr2);
            break;



        case 'ineqlt':
            echo "Returns true if arr1 is not equal to arr2 : ";
            var_dump($arr1!=$arr2);
            break;

        case 'strctineqlt':
            echo "Returns true if arr1 is not identical to arr2 : ";
            var_dump($arr1!==$arr2);
            break;

        default:
        echo "Please enter valid input";
        }
    }
?>

</pre>