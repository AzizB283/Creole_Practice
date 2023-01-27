<pre>
<?php

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
                $key=array_rand($arr);
                echo $arr[$key];
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
                  foreach($arr as $key=>$val)
                        {
                              echo "[$key] = $val";
                              echo "<br>";
                        }
                                        
                  break;


            case 'dsc':
                 arsort($arr);
                  echo "Descending order : "."<br>";
                  foreach($arr as $key=>$val)
                        {
                        echo "[$key] = $val";
                        echo "<br>";
                        }
                  break;


            case 'shuffle':
                  echo "Suffled elements : "."<br>";
                  print_r(shuffle($arr));
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
                        

            case 'push':
                 echo "Pushed new element : ";
                 $pushed=array_push($arr,5);
                 print_r($arr);
                  break;

            case 'pop':
                  echo "Poped last element : ";
                  $poped=array_pop($arr);
                  print_r($arr);
                  break;

            case 'shift':
                  echo "Shift first element : ";
                  $shifted=array_shift($arr);
                  print_r($arr);
                  break;

            case 'unshift':
                  echo "Unshift first element : ";
                  $unshifted=array_unshift($arr,5);
                  print_r($arr);
                  break;

            default:
                echo "Enter valid input";
                break;
        }

    } 
 
 
  
  
// }

?>
</pre>
