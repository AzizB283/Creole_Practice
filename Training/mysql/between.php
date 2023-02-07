<?php

require "min_max.php";

echo "<center><h2>BETWEEN Operator</h2></center>";

echo "The BETWEEN operator selects values within a given range. The values can be numbers, text, or dates.<br><br>";


echo "Condition : Salary between 25000 to 32000<br>";

$sql = "SELECT * FROM employee WHERE salary BETWEEN 25000  AND 32000";

$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($res)){
    print_r($row);
    echo "<br>";
}

echo "<br><br><br>";

echo "<center><h2>NOT BETWEEN Operator</h2></center>";
echo "Condition : Salary not between 25000 to 32000<br>";

$sql2 = "SELECT * FROM employee WHERE salary NOT BETWEEN 25000  AND 32000";

$res2 = mysqli_query($conn, $sql2);

while($row2 = mysqli_fetch_assoc($res2)){
    print_r($row2);
    echo "<br>";
}


echo "<br><br><br>";

echo "<center><h2>BETWEEN and IN Operator</h2></center>";
echo "Condition : Salary between 25000 to 32000 and city = morbi<br>";

$sql3 = "SELECT * FROM employee WHERE salary BETWEEN 25000  AND 32000  AND city IN ('morbi')";

$res3 = mysqli_query($conn, $sql3);

while($row3 = mysqli_fetch_assoc($res3)){
    print_r($row3);
    echo "<br>";
}
?>