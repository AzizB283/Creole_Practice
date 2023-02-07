

<?php

require "index.php";
echo "<center><h2>DELETE</h2></center>";
$id = $_GET['id'];
$sql = "DELETE FROM pr_form WHERE id = $id ";
$res = mysqli_query($conn, $sql);


if(mysqli_query($conn,$sql)){
    echo "Data deleted successfully";
}
else{
    echo "Error : ".mysqli_error();
}

?>
