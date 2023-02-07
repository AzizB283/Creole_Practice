<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "creole_practice";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    echo "Database not connected";
}
else{
    echo "Database connected successfully";
}

// $sql = "ALTER TABLE employee
//     ADD FOREIGN KEY (id)           
//     REFERENCES user_details(id)
//     ";

// $res = mysqli_query($conn, $sql);

// if($res){
//     echo "Foriegn key created";
// }
// else{
//     echo "Error : ".mysqli_error($conn);
// }

// echo "<br><br><br>";


// echo "<h2>Min Salary</h2>";

// $sql = "SELECT MIN(salary) FROM employee";

// $res = mysqli_query($conn, $sql);

// while($row = mysqli_fetch_assoc($res)){
//     print_r($row);
// } 


// echo "<br><br><br>";

// echo "<h2>Max Salary</h2>";

// $sql = "SELECT MAX(salary) AS maxsalary FROM employee";

// $res = mysqli_query($conn, $sql);

// while($row = mysqli_fetch_assoc($res)){
//     print_r($row);
// } 


?>