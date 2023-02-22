<?php

require "../Database/db.php";

$id = $_GET['id'];

$sql = "DELETE FROM user_details WHERE id='$id'";

$res = mysqli_query($conn, $sql);

if(mysqli_query($conn,$sql)){
    header("Location: welcome.php");
}
else{
    echo "Error : ".mysqli_error();
}

?>