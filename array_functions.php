<?php

// array introduction 

// how to initialize an array 

$arr = array("Aziz","Parth","Niraj");
$arr1 = array(1,2,3,4,5);

var_dump($arr);
echo "<br>";
var_dump($arr1);
echo "<br>";



// print array elements using for loop

$cars=array("Volvo","BMW","Toyota");
$arrlength=count($cars);
echo $arrlength;
echo "<br>";

for($x=0;$x<$arrlength;$x++)
  {
  echo $cars[$x];
  echo "<br>";
  }



  $newarr = array(1,2,3);
  print_r($newarr);


  echo "<br>";


  //  2D array 

  $arr2d = array(

    array("ab","cd"),
    array(1,2,3)
  );


  print_r($arr2d);
  echo "<br>";
  echo $arr2d[0][1];




  // array_change_key_case - Change all keys in an array to uppercase 
  // syntax - array_change_key_case(array,case)

  echo "<br>";
  $arr2 = array ("Name"=>"aziz","Age"=>20);

  print_r( array_change_key_case($arr2,CASE_UPPER));
  echo "<br>";
  print_r( array_change_key_case($arr2,CASE_LOWER));





  // array_chunk - split array into n parts
  // syntax - array_chunk(array, n);

  echo "<br>";
  $arr3 = array ("Hi","Hello","Bonjour", "Hola");

  print_r(array_chunk($arr3,4));





  // array_column - Return records from specific column 

  echo "<br>";

  $arrcol  = array(
    array(
        "id"=>1,
        "name"=>"Aziz",
        "age"=>20
    ),

    array(
        "id"=> 2,
        "name"=>"Niraj",
        "age"=>21
    ),

    array(
        "id"=>3,
        "name"=>"Parth",
        "age"=>22
    )
    );

    print_r(array_column($arrcol,"age"));




 // array_combine - combine two array in key/value pair

 echo "<br>";
 
 $arrcom1 = array("Aziz","Niraj","Parth");
 $arrcom2 = array(20,21,22);

 print_r(array_combine($arrcom1,$arrcom2));




 //array_count_values - count occurance of each value in array 

 echo "<br>";

 $arr4 = array("ab","asd",2,3,4,4,3);

 print_r (array_count_values($arr4));




 // array_diff - Compare the values of two arrays, and return the differences
 // only return value when array1 has different value than arr2. It won't return anything if arr2 has more values than arr1

 echo "<br>";
//  $arr5 = array("Aziz","Niraj","Parth");
//  $arr6 = array("Niraj","Aziz","Parth","Juzar");

$arr5 = array(1,2,3,4,5);
$arr6 = array(1,2,3,4,5,6,7);

 print_r(array_diff($arr5,$arr6));




 // array_diff_assoc - Compare the values of two arrays(key/values), and return the differences

 echo "<br>";
 $arr6 = array("name"=>"Aziz","age"=>21,"language"=>"php");
 $arr7 = array ("name"=>"Aziz","age"=>21);

 print_r(array_diff_assoc($arr6,$arr7));




 // array_diff_key - Compare the keys of two arrays, and return the differences

 echo "<br>";

 $arr7 = array("a"=>"Aziz","b"=>"Niraj","c"=>"Parth");
 $arr8 = array("a"=>"name","c"=>"age","d"=>"language");

 print_r(array_diff_key($arr7,$arr8));



 // array_diff_uassoc - Compare the keys and values of two arrays 

 echo "<br>";

 function myfunction($arr9,$arr10)
{
if ($arr9===$arr10)
  {
  return "Both array not matched";
  }
  return ($arr9>$arr10)?1:-1;
}

 $arr9 = array("a"=>"Aziz","b"=>"Niraj","c"=>"Parth");
 $arr10 = array("a"=>"Aziz","b"=>"Nir","f"=>"Parth");

 print_r(array_diff_uassoc($arr9,$arr10,myfunction));



 // array_fill - fill an array with values
 echo "<br>";

 $arr11 = array(1,2,3,4,5);

 $arr12  = print_r(array_fill(3,2,5));

 // How to know which array this arr_fill function target
 // arr 12 output 1

 echo "<br>";
 print_r($arr12);
 echo "<br>";

 print_r($arr11);



 // array_fill_keys - fill the values with specific keys

 echo "<br>";

 print_r(array_fill_keys($arr11,"aziz"));




 // array_flip - flip key and values interchangebly


 echo "<br>";

 print_r(array_flip($arr9));



 // array_intersect - compare the values and return matches

 echo "<br>";

 print_r(array_intersect($arr9,$arr10));




 // array_intersect_assoc - Compare the keys and values of two arrays, and return the matches

 echo "<br>";

 print_r(array_intersect_assoc($arr9,$arr10));




 // array_intersect_key Compare the keys of two arrays, and return the matches

 echo "<br>";

 print_r(array_intersect_key($arr9,$arr10));




 // array_key_exist - check if key exist

 echo "<br>";

 print_r(array_key_exists("a",$arr9));




 // array_keys - return array containing keys

 echo "<br>";

 print_r(array_keys($arr9));



 //  array_map - The array_map() function sends each value of an array to a user-made function, and returns an array with new values

 echo "<br>";

 $a = [1,2,3,4,5];

 function function1($arg)
 {
  return ($arg*$arg);
 }

 print_r(array_map("function1",$a));





 // array_merge - Merge two array into one - it doesn't repeats the same values

 echo "<br>";

 print_r(array_merge($arr9,$arr10));




 // array_merge_recursive - It repeat same key-values 

 echo "<br>";

 print_r(array_merge_recursive($arr9,$arr10));




 // array_multisort - sort elements in ascending order

 echo "<br>";
 $c=array("Dog","Cat","Horse","Bear","Zebra");
 array_multisort($c);
 print_r($c);




 // array_pad - insert a value in array n times till specific position

 echo "<br>";

//  $arr13 = array("Red","Green");
 
//  print_r(array_pad($arr13,5,"Blue"));



 // array_pop - delete the last elements of array 

 echo "<br>";

 $arr15 = array(1,2,3,4,5);

 print_r(array_pop($arr15));
 echo "<br>";
 print_r($arr15);



 // array_product - calculate and return the product of array 

 echo "<br>";

 print_r(array_product($arr15));


 // array_push - push an element at last

 echo "<br>";

 print_r(array_push($arr15,5));
 echo "<br>";
 print_r($arr15);




 //array_rand  - Return array of random keys

 echo "<br>";

 print_r(array_rand($arr15));



// Send the values in an array to a user-defined function and return a string
echo "<br>";

 function myfunction2($v1,$v2)
{
return $v1 . "-" . $v2;
}
$arr16=array("Dog","Cat","Horse");
print_r(array_reduce($arr16,"myfunction2"));



// array_replace - Replace the values of the first array with the values from the second array

echo "<br>";

print_r(array_replace($arr9,$arr10));



// array_reverese - Reverse an array 

echo "<br>";

print_r(array_reverse($arr15));



// array_search - search an array for the value and return index

echo "<br>";

print_r(array_search(5, $arr15));




// array_shift - Remove the first element from array 

echo "<br>";

print_r(array_shift($arr15));



// array_slice - Start the slice from the nth array element, and return the rest of the elements in the array:

echo "<br>";

print_r(array_slice($arr15,2));




//array_splice - Remove elements from an array and replace it with new elements

echo"<br>";
$searr = array(1,2,3,4);

print_r(array_splice($arr15,2,4,$searr));





// array_sum - sum of all element

echo "<br>";

$sumarr=array("a","b","c","a","d","c");
print_r(array_sum($arr15));




// array_unique - removes the duplicate elements and return unique elements

echo "<br>";

print_r(array_unique($sumarr));



// array_unshift - add element at the first place

echo "<br>";

print_r(array_unshift($arr15,1));
echo "<br>";
print_r($arr15);



// array_values - Return all values in array 

echo "<br>";

print_r(array_values($arr9));




// array_walk - Run each array element in a user-defined function

// echo "<br>";

// function myfunction3($value,$key)
// {
// echo "The key $key has the value $value<br>";
// }


// print_r(array_walk($arr9,"myfunction3"));


// arsort - Sort an associative array in descending order : according to value
// asort - Sort an associative array in ascending order : according to value

echo "<br>";

$arr17 = array("age"=>"24","age"=>20,"age"=>19);

arsort($arr17);

foreach($arr17 as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }




// compact - create an array from variables and their values

$name = "aziz";
$age = 20;
$language = "php";

$res = compact("name","age","language");

print_r($res);



// count - return the number of element in an array
echo "<br>";
print_r(count($res));



// each - Return the current element key and value, and move the internal pointer forward
echo "<br>";
$people = array("Peter", "Joe", "Glenn", "Cleveland");
// print_r (each($people));
echo current($people)."<br>";
echo next($people)."<br>";
echo current($people)."<br>";
echo prev($people)."<br>";
echo current($people)."<br>";
echo reset($people)."<br>";
echo end($people)."<br>";
print_r (each($people));



// key - Return the element key from the current internal pointer position
echo "<br>";
echo key($arr15);


// krsort - Sort an associative array in descending order : according to key
// ksort - Sort an associative array in ascending order : according to key

echo "<br>";

$arr17 = array("age"=>24,"age"=>20,"age"=>19);

krsort($arr17);

foreach($arr17 as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }



// list - Assign variables as if they were an array
echo "<br>";

$my_array = array("dog","cat","horse");

list($a, $b, $c) = $my_array;
echo "I have several animals, a $a, a $b and a $c.";



// range - Create an array containing a range of elements from "n" to "n"
echo "<br>";
print_r(range(0,9));


// sort - sort the elements of array in ascending alphabetical order
// rsort - rsort the elements of array in descending alphabetical order

echo "<br>";
$cars1=array("Volvo","BMW","Toyota");
$asc=sort($cars1);
print_r($asc);
echo "<br>";
$des=rsort($cars1);
print_r($des);



// shuffle - 
echo "<br>";
shuffle($cars1);
print_r($cars1);



// sizeof - return the number of elements in array 

echo "<br>";

echo sizeof($cars1);




































































?>