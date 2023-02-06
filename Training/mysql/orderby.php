<pre>
<?php

require "index.php";
echo "<center><h2>Order By</h2></center>";


$sql = "SELECT * FROM user_details ORDER BY name DESC";
$res = mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
        print_r($row);
    }
}


// $sql1 = "SELECT * FROM user_details ORDER BY name DESC, id";
// $res1 = mysqli_query($conn, $sql1);

// if(mysqli_num_rows($res1)>0){
//     while($row1 = mysqli_fetch_assoc($res1)){
//         print_r($row1);
//     }
// }

?>

</pre>