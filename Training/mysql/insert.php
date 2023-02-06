<?php

require "index.php";

echo "<center><h2>Insert Query</h2></center>";

$sql = "INSERT INTO user_details (name, email, age) VALUES ('Aziz','a@gmail.com',21);";


// insert multiple records 

$sql .= "INSERT INTO user_details (name, email, age) VALUES ('Raj','raju@gmail.com,21);";

$sql .= "INSERT INTO user_details (name, email, age) VALUES ('Sid','sid@gmail.com',21)";




if(mysqli_query($conn,$sql)){
    $last_id = mysqli_insert_id($conn);
    echo "New record inserted successfully ".$last_id;
}

else {
    echo " Error : ".mysqli_error($conn);
}








mysqli_close($conn);

?>