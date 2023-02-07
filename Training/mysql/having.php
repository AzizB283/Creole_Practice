<?php

require "min_max.php";

echo "<h1>Having</h1>";

echo "Having salary > 30000<br>";
$sql = "SELECT salary 
FROM employee
HAVING salary>30000";

$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($res)){
    print_r($row);
    echo "<br>";
}


echo "<br><br><br>";
echo "Having emp_id > 30<br>";
$sql = "SELECT emp_id 
FROM employee
HAVING emp_id>30";

$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($res)){
    print_r($row);
    echo "<br>";
}


?>