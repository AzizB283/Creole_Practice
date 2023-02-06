<?php

require "index.php";

echo "<center><h2>Multiple Insert Query</h2></center>";
// insert multiple records 

$sql = "INSERT INTO user_details (name, email, age) VALUES ('Aziz1','az@gmail.com',20);";

$sql .= "INSERT INTO user_details (name, email, age) VALUES ('Raj','raju@gmail.com',21);";

$sql .= "INSERT INTO user_details (name, email, age) VALUES ('Sid','sid@gmail.com',21)";


if(mysqli_multi_query($conn,$sql)){
    echo "New record inserted successfully ";
}

else {
    echo " Error : ".mysqli_error($conn);
}


?>