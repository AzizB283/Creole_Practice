<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="">Enter a number : </label>
        <input type="number" name="num" id="">

        <input type="submit" value="Submit">
    </form>
</body>
</html>


<?php

$sum=0;
// $num = $_POST['num'];

//      while($num>0){
//         $num1 = ($num) * ($num-1);
//         $num--;
//         $sum += $num1;
//      }
// echo $sum;

// for($i=$num;$i>0;$i--){
//     $num1 = $num * ($num-1);
//     // $num--;
//     $sum+=$num1;
//}


function fib($num){
    return $num * fib($num-1);

}
// echo $sum;

echo fib(5);




?>