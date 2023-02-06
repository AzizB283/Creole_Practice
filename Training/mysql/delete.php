<?php

require "index.php";
echo "<center><h2>DELETE</h2></center>";

$sql = "DELETE FROM user_details WHERE id = 58";
$res = mysqli_query($conn, $sql);

if($res){
    echo "Data deleted successfully";
}
else{
    echo "Error : ".mysqli_error($conn);
}

?>
