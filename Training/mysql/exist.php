<?php

require "min_max.php";

echo "<h2>EXIST</h2>";

$sql = "SELECT emp_id FROM employee 
WHERE EXISTS 
(SELECT id FROM user_details WHERE employee.emp_id = user_details.id)";

$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($res)){
    print_r($row);
    echo "<br>";

}

?>