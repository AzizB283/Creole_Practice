<?php

// echo $_POST['input'];

$arr = explode(",",$_POST['input']);


if(!isset($_POST['submit'])){

    // if(!empty($_POST[select])){

        $select = $_POST['select'];
        switch($select){

            case 'product':
                echo "Product of array function : ";
                print_r(array_product($arr));
                break;

            case 'random':
                echo "Random elements of array keys : ";
                print_r(array_rand($arr));
                 break;
            
            case 'reverse':
                 echo "Reveresed array elements : ";
                 print_r(array_reverse($arr));
                 break;


            case 'count':
                  echo "Number of elements in array : ";
                  print_r(count($arr));
                  break;


            case 'sum':
                  echo "Sum of elements : ";
                  print_r(array_sum($arr));
                  break;

            case 'unique':
                  echo "Unique elements of array  : ";
                  print_r(array_unique($arr));
                  break;

            case 'value':
                  echo "Array Values : ";
                  print_r(array_values($arr));
                  break;


            case 'asc':
                  asort($arr);
                  echo "Ascending order : "."<br>";
                  foreach($arr as $x=>$x_value)
                        {
                        echo "". $x_value;
                        echo "<br>";
                        }
                                        
                  break;


            case 'dsc':
                 arsort($arr);
                  echo "Descending order : "."<br>";
                  foreach($arr as $x=>$x_value)
                        {
                        echo "". $x_value;
                        echo "<br>";
                        }
                  break;


            case 'shuffle':
                  echo "Suffled elements : "."<br>";
                  shuffle($arr);
                  foreach($arr as $x=>$x_value)
                        {
                        echo "". $x_value;
                        echo "<br>";
                        }

                  break;

            case 'sizeof':
                  echo "Number of elements : ";
                  echo sizeof($arr);
                  break;
                        

            default:
                echo "Enter valid input";
                break;
        }

    } 
 
 
  
  
// }

?>
