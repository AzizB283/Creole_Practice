<?php

require "min_max.php";

echo "<center><h1>Like Operator</h1></center>";
echo "<h2>Start with a</h2><br>";

$sql = "SELECT * FROM employee WHERE name LIKE 'a%'";

$res = mysqli_query($conn, $sql);



while($row = mysqli_fetch_assoc($res)){

    print_r($row);
    echo "<br>";
}
    

echo "<br><br>";
echo "<h2>City ends with i</h2>";

$sql1 = "SELECT * FROM employee WHERE city LIKE '%i'";

$res1 = mysqli_query($conn, $sql1);



while($row1 = mysqli_fetch_assoc($res1)){

    print_r($row1);
    echo "<br>";
}


echo "<br><br>";
echo "<h2>Finds name values that have 'a' in any position</h2>";

$sql2 = "SELECT * FROM employee WHERE name LIKE '%a%'";

$res2 = mysqli_query($conn, $sql2);



while($row2 = mysqli_fetch_assoc($res2)){

    print_r($row2);
    echo "<br>";
}


echo "<br><br><br>";
echo "<h2>Finds city values that have 'a' in the second position</h2>";

$sql3 = "SELECT * FROM employee WHERE city LIKE '_a%'";

$res3 = mysqli_query($conn, $sql3);



while($row3 = mysqli_fetch_assoc($res3)){

    print_r($row3);
    echo "<br>";
}




echo "<br><br><br>";
echo "<h2>Finds name values that start with 'a' and are at least 3 characters in length</h2>";

$sql4 = "SELECT * FROM employee WHERE name LIKE 'a___%'";

$res4 = mysqli_query($conn, $sql4);



while($row4 = mysqli_fetch_assoc($res4)){

    print_r($row4);
    echo "<br>";
}




echo "<br><br><br>";
echo "<h2>Finds city values that start with 'u' and ends with 'a'</h2>";

$sql5 = "SELECT * FROM employee WHERE city LIKE 'u%a'";

$res5 = mysqli_query($conn, $sql5);



while($row5 = mysqli_fetch_assoc($res5)){

    print_r($row5);
    echo "<br>";
}









?>