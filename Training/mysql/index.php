<?php

echo "<center><h1>PHP MySQL</h1></center>";

// open a connection to mysql

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "creole_practice";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully<br>";


// create database 

// $sql = "CREATE DATABASE creole_practice";

// if(mysqli_query($conn, $sql)){
//     echo "Database created successfully";
// }

// else{
//     echo "Error creating database".mysqli_error($conn);
// }


// mysqli_close($conn);

?>
