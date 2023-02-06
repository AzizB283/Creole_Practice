<?php

require "index.php";
echo "<center><h2>Select Query</h2></center>";


echo "<br><b>Using column name in select query</b><br>";
$sql = "SELECT id, name, email FROM user_details";
$res = mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
        echo "id: " . $row["id"]. " => Name: " . $row["name"]. "&nbsp;&nbsp; => Email : " . $row["email"]. "<br>";
        // print_r($row);
    }
}
else{
    echo "0 Results";
}


echo "<br><br>";
echo "<b>Using select * </b><br>";

$sql1 = "SELECT * FROM user_details";

$res1 = mysqli_query($conn, $sql1);

if(mysqli_num_rows($res1)>0){
    while($row1=mysqli_fetch_assoc($res1)){
        print_r($row1);
    }
}


// specific id 

echo "<br><br><br><br><br>";
echo "<b>Using specific id </b><br>";


$sql2 = "SELECT * FROM user_details WHERE id = 1";
$res2 = mysqli_query($conn, $sql2);

if(mysqli_num_rows($res2)>0){
    while($row2=mysqli_fetch_assoc($res2)){
        print_r($row2);
    }
}

?>