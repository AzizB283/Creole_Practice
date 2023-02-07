<pre>
<?php

require "index.php";

$sql = "SELECT * FROM user_details WHERE age = 20 OR age = 22";

echo "<h2>Use of OR</h2>";
Echo "Condition : Age 20 or 22<br>";

$res = mysqli_query($conn, $sql);

if(mysqli_num_rows($res)>0){
    while($row = mysqli_fetch_assoc($res)){
        print_r($row);
    }

}
else{
    echo "No result found";
}


echo "<br><br><br>";
echo "<h2>Use of AND</h2>";
echo "<br><br><br>";

$sql1 = "SELECT * FROM user_details WHERE age = 20  AND email ='aziz@gmail.com' ";
$res1 = mysqli_query($conn, $sql1);

if(mysqli_num_rows($res1)>0){
    while($row1 = mysqli_fetch_assoc($rse1)){
        print_r($row1);
    }
}
else{
    echo "No results found";
}



echo "<br><br><br>";
echo "<h2>Use of NOT</h2>";
echo "<br><br><br>";
echo "Condition : NOT age = 21  AND NOT age = 22";

$sql2 = "SELECT * FROM user_details WHERE NOT age = 21  AND NOT age =22";
$res2 = mysqli_query($conn,$sql2);

if(mysqli_num_rows($res2)>0){
    while($row2 = mysqli_fetch_assoc($res2)){
        print_r($row2);
    }
}
else{
    echo "No results found";
}

echo "<br><br><br><br>";
echo "Condition : NOT age = 20";


$sql2 = "SELECT * FROM user_details WHERE NOT age = 20";
$res2 = mysqli_query($conn,$sql2);

if(mysqli_num_rows($res2)>0){
    while($row2 = mysqli_fetch_assoc($res2)){
        print_r($row2);
    }
}
else{
    echo "No results found";
}

?>
</pre>