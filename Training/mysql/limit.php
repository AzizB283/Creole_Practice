<pre>
<?php

require "index.php";
echo "<center><h2>LIMIT</h2></center>";

$sql = "SELECT * FROM user_details LIMIT 30";
$res = mysqli_query($conn, $sql);

if($res){
    while($row = mysqli_fetch_assoc($res)){
        print_r($row);
    }
}
else{
    echo "Error : ". mysqli_error($conn);
}

echo "<br><br>";

// From limit 2 - 7
$sql1 = "SELECT * FROM user_details LIMIT 2, 5";
$res1 = mysqli_query($conn, $sql1);

if($res1){
    while($row1 = mysqli_fetch_assoc($res1)){
        print_r($row1);
    }
}else{
    echo "Error : ".mysqli_fetch_assoc($conn);

}
?>
</pre> 