<?php

require "min_max.php";

echo "<center><h2>In Operator</h2></center>";

echo "The IN operator is a shorthand for multiple OR conditions<br><br>";


$sql = "SELECT * FROM employee WHERE city IN('rajkot','upleta')";

$res = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($res)){
    print_r($row);
    echo "<br>";
}

?>