<?php

require "min_max.php";

echo "<h1>Group By</h1>";

$sql = "SELECT COUNT(emp_id),city 
FROM employee
GROUP BY city";

$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($res)){
    print_r($row);
    echo "<br>";
}

?>