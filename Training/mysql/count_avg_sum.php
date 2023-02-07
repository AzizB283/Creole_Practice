<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "creole_practice";

$conn = mysqli_connect($servername, $username, $password, $dbname);


echo "<h2>Count</h2>";

$sql = "SELECT COUNT(id) FROM employee";

$res = mysqli_query($conn, $sql);

if(mysqli_num_rows($res)){

    while($row = mysqli_fetch_assoc($res)){
        print_r($row);
        
    }
}
else{
    echo "0 Records";
}


echo "<br><br><br>";
echo "<h2>Average</h2>";


$sql1 = "SELECT AVG(salary) FROM employee";

$res1 = mysqli_query($conn, $sql1);

if(mysqli_num_rows($res1)>0){
    while($row1 = mysqli_fetch_assoc($res1)){
        print_r($row1);
    }
}
else{
    echo "Avg = 0";
}


echo "<br><br><br>";
echo "<h2>Sum</h2>";


$sql2 = "SELECT SUM(salary) FROM employee";

$res2 = mysqli_query($conn, $sql2);

if(mysqli_num_rows($res2)>0){
    while($row2 = mysqli_fetch_assoc($res2)){
        print_r($row2);
    }
}
else{
    echo "Sum = 0";
}


?>