<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "user_details";

echo "<center><h2>Create Table Query</h2></center>";


$conn = mysqli_connect($servername, $username, $password, $dbname);


if(!$conn){
    die ("Connection failed : ".mysqli_connect_error());
}

else {
    echo "Connected Successfully<br>";
}



// create table using query 

$sql = "CREATE TABLE user_details(
    id INT(5) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(40) NOT NULL,
    email VARCHAR(30),
    age INT(2) NOT NULL

)";


if(mysqli_query($conn,$sql)){
    echo "Table created successfully";
}
else{
    echo "Error creating table : ".mysqli_error($conn);
}

mysqli_close($conn);

?>

