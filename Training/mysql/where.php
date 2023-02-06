<?php

require "index.php";
echo "<center><h2>Where</h2></center>";

$sql = "SELECT * FROM user_details WHERE name = 'Azi'";
$res= mysqli_query($conn, $sql);


if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
        print_r($row);
    }
}
else{
    echo "Error : ".mysqli_error($conn);
}

?>