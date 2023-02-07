<?php

$servername = "localhost";

$username = "root";

$password = "";

$dbname = "creole_practice";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// if(!$conn){
//     echo "Error : ".mysqli_error($conn);
// }
// else{
//     echo "Connection Successfull.";
// }
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];

if(!isset($_POST['submit'])){

    $sql = "INSERT INTO pr_form (name, email, age, gender, address) VALUES ('$name', '$email', '$age', '$gender', '$address')";
    
    $res = mysqli_query($conn, $sql);
    

    if($res){
        header('Location: view.php');
    }
    else{
        echo "Error : ".mysqli_error($conn);
    }

}
else {
    echo "Please enter valid input";
}

?>