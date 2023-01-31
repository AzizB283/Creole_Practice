<?php

// if...else is a conditional statement that is used to check conditions and display output according to that


// if statement 
// syntax : if(condition){}

// $age = 20;
// if($age>18){
//     echo "You can drive car";
// }

// if($age<18){
//     echo "You can't drive car";
// }

// echo "<br>";
// echo "<br>";


// if..else 
// syntax : 
// if(condition){
//     // if satisfies then this will execute
// }else {
//     this will execute
// }


// if($age>18){
//     echo "You can drive";
// }else{
//     echo "You can't drive";
// }

// echo "<br>";
// echo "<br>";

// $t = date("H");

// if ($t < "20") {
//   echo "Have a good day!";
// } else {
//   echo "Have a good night!";
// }

// echo "<br>";
// echo "<br>";

// if...elseif...else 
// $age1=14;
// if($age1>=16 && $age1<18){
//     echo "You can only drive moped";
// }elseif($age1>18){
//     echo "You can drive car";

// }else{
//     echo "You can not drive anything, your age is under 16";
// }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If_Else</title>
</head>
<body>
    <form action="process.php" method="post">
        <label for="">Enter your age : </label>
        <input type="number" name="age" id="">
        <br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>