<?php

require "index.php";
echo "<center><h2>UPDATE</h2></center>";

$sql = "UPDATE user_details SET name='Raju' WHERE id=58";

$res = mysqli_query($conn, $sql);

if($res){
    echo "Data updated successfully";
}
else{
    echo "Error : ". mysqli_error($conn);
}
?>