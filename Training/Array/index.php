<pre>
<?php 

// Array is used to store multiple values into single variables

// array can be created using array() 

$arr = array(1,2,3,4);
print_r($arr);


// Indexed array 

echo "<h3>Indexed Array </h3>";

// Indexed can be assigned manually also 

$names[0]= "Aziz";
$names[1]="Raj";
$names[2]="Sid";

echo $names[0];
echo "<br>";

echo "<br>Looping through indexed array"."<br>";

foreach($names as $key=>$value){
    echo $key," => ",$value;
    echo "<br>";
}



// Associative array 

echo "<h3>Associative Arrays </h3>";

$assocarr=array("Name"=>"Aziz","Age"=>20,"City"=>"Morbi");

foreach($assocarr as $key => $value){
    echo $key, " => ", $value;
    echo "<br>";
}




// Multidimensional arrays 

echo "<h3>Multidimensional arrays</h3>";

$details = array(
    array("Aziz",20,"Morbi"),
    array("Raj",21,"Morbi"),
    array("Priyansh",20,"Rajkot")
);


echo $details[0][0],"'s age is ",$details[0][1], " and he lives in ",$details[0][2]."<br>";
echo $details[1][0],"'s age is ",$details[1][1], " and he lives in ",$details[1][2]."<br>";
echo $details[2][0],"'s age is ",$details[2][1], " and he lives in ",$details[2][2]."<br>";


print_r($details);

// Sorting arrays 

echo "<h3>Sorting arrays</h3>";

$arr2 = array(1 => "BMW", 3 => "Audi", 2 => "Mercedes",4 =>"Buggati");
echo "Sort array in acsending order"."<br>";

sort($arr2);
foreach($arr2 as $key => $value){

    echo $key, " => ", $value;
    echo "<br>";
}

echo "<br>";
echo "<br>";


echo "Sort array in descsending order"."<br>";
rsort($arr2);

foreach($arr2 as $key => $value){

    echo $key, " => ", $value;
    echo "<br>";
}

echo "<br>";
echo "<br>";


echo "ksort sorts the array according to key in ascending order"."<br>";
ksort($arr2);
foreach($arr2 as $key => $value){

    echo $key, " => ", $value;
    echo "<br>";
}

echo "<br>";
echo "<br>";


echo "asort sorts the array accroding to value"."<br>";
asort($arr2);

foreach($arr2 as $key => $value){

    echo $key, " => ", $value;
    echo "<br>";
}

echo "<br>";
echo "<br>";


echo "arsort sort associative arrays in descending order, according to the value"."<br>";

arsort($arr2);
foreach($arr2 as $key => $value){

    echo $key, " => ", $value;
    echo "<br>";
}

echo "<br>";
echo "<br>";

echo "krsort sort associative arrays in descending order, according to the key"."<br>";

krsort($arr2);
foreach($arr2 as $key => $value){

    echo $key, " => ", $value;
    echo "<br>";
}






?>





</pre>