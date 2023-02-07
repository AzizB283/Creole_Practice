<?php

require "min_max.php";

echo "<center><h2>Union</h2></center>";

echo "The UNION operator is used to combine the result-set of two or more SELECT statements<br><br>";

$sql = "SELECT name FROM employee
UNION 
SELECT name FROM user_details";

$res= mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($res)){
    print_r($row);
    echo "<br>";
}


echo "<br><br><br>";

echo "<center><h2>Union All</h2></center>";

echo "The UNION All operator is used to combine the result-set (duplicate also) of two or more SELECT statements<br><br>";

$sql = "SELECT name FROM employee
UNION ALL
SELECT name FROM user_details";

$res= mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($res)){
    print_r($row);
    echo "<br>";
}
?>