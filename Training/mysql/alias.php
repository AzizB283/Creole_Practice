<?php

require "min_max.php";

echo "<center><h2>Alias</h2></center>";

echo "An alias is created with the AS keyword<br><br>";


$sql = "SELECT name AS firstname FROM employee";

$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($res)){
    print_r($row);
    echo "<br>";
}


echo "<br><br><br>";

$sql = "SELECT name, city AS address FROM employee";

$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($res)){
    echo "Employee name is : ".$row['name']. " and the address is : ".$row['address'];
    echo "<br>";
}

?>