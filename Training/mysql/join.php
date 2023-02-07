<?php

require "min_max.php";

echo "<center><h1>Join</h1></center>";


echo "<h2>Inner Join</h2>";
$sql = "SELECT employee.emp_id, user_details.name 
FROM employee
INNER JOIN user_details ON employee.emp_id=user_details.id";

$res = mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0){

    while($row = mysqli_fetch_assoc($res)){
        print_r($row);
        echo "<br>";
    }
}

echo "<br><br><br>";

echo "<h2>Left Join</h2>";
$sql = "SELECT employee.emp_id, user_details.name 
FROM employee
LEFT JOIN user_details ON employee.emp_id=user_details.id";

$res = mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0){

    while($row = mysqli_fetch_assoc($res)){
        print_r($row);
        echo "<br>";
    }
}


echo "<br><br><br>";

echo "<h2>Right Join</h2>";
$sql = "SELECT employee.emp_id, user_details.name 
FROM employee
RIGHT JOIN user_details ON employee.emp_id=user_details.id";

$res = mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0){

    while($row = mysqli_fetch_assoc($res)){
        print_r($row);
        echo "<br>";
    }
}


echo "<br><br><br>";

echo "<h2>Cross Join</h2>";
echo "Example 1<br>";

$sql = "SELECT employee.emp_id, user_details.name 
FROM employee
CROSS JOIN user_details ON employee.emp_id=user_details.id";

$res = mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0){

    while($row = mysqli_fetch_assoc($res)){
        print_r($row);
        echo "<br>";
    }
}

echo "<br><br><br>";
echo "Example 2<br>";

$sql = "SELECT employee.emp_id, user_details.name 
FROM employee
CROSS JOIN user_details";

$res = mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0){

    while($row = mysqli_fetch_assoc($res)){
        print_r($row);
        echo "<br>";
    }
}



echo "<br><br><br>";

echo "<h2>Self Join</h2>";

$sql = "SELECT employee.emp_id, user_details.name 
FROM employee
,user_details WHERE employee.emp_id=user_details.id";

$res = mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0){

    while($row = mysqli_fetch_assoc($res)){
        print_r($row);
        echo "<br>";
    }
}
?>