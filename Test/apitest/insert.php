<?php

header('Access-Control-Allow-Origin:*');
header('Access-Control-Allow-Credentials:true');
header('Access-Control-Allow-Methods:GET, POST, OPTIONS');
header('Access-Control-Allow-Headers:*');
header('Content-Type: application/json');

require "db.php";

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';
$filename = $_FILES['image']['name'] ?? '';

// check if any field is empty
if (empty($name) || empty($email) || empty($password) || empty($filename)) {
    $response = array(
        "type" => "error",
        "message" => "Please fill out all fields."
    );
    echo json_encode($response);
    exit();
}

$sql_check_email = "SELECT * FROM apilogin WHERE email = '$email'";
$res_check_email = mysqli_query($conn, $sql_check_email);
if (mysqli_num_rows($res_check_email) > 0) {
    $response = array(
        "type" => "error",
        "message" => "This email is already registered."
    );
    echo json_encode($response);
    exit();
}

// Get Image Dimension
$fileinfo = @getimagesize($_FILES["image"]["tmp_name"]);
$allowed_image_extension = array(
    "png",
    "jpg",
    "jpeg"
);

// Get image file extension
$file_extension = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

// Validate file input to check if is not empty
if (! file_exists($_FILES["image"]["tmp_name"])) {
    $response = array(
        "type" => "error",
        "message" => "Choose image file to upload."
    );
    echo json_encode($response);
    exit();
}

// Validate file input to check if is with valid extension
else if (! in_array($file_extension, $allowed_image_extension)) {
    $response = array(
        "type" => "error",
        "message" => "Upload valid images. Only PNG and JPEG are allowed."
    );
    echo json_encode($response);
    exit();
}

// Validate image file size
else if (($_FILES["image"]["size"] > 1000000)) {
    $response = array(
        "type" => "error",
        "message" => "Image size exceeds 1MB"
    );
    echo json_encode($response);
    exit();
}

$password = md5($password);

$sql = "INSERT INTO apilogin (name, email, password, image) VALUES ('$name','$email', '$password','$filename')";

$res = mysqli_query($conn, $sql);

if ($res) {
    $msg = ['msg' => 'Record Inserted Successfully', 'status' => true];
    echo json_encode($msg);

} else {
    $msg = ['msg' => 'Error Inserting Record', 'status' => false];
    echo json_encode($msg);
}

?>