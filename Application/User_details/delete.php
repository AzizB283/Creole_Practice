<?php
session_start();
require "../Database/db.php";

$id = $_GET['id'];

$sql = "DELETE FROM user_details WHERE id='$id'";

$res = mysqli_query($conn, $sql);

if(mysqli_query($conn,$sql)){
    $_SESSION['status'] = "User deleted successfully. Id = ".$id;
    header("Location: welcome.php");
}
else{
    echo "Error : ".mysqli_error();
}

?>