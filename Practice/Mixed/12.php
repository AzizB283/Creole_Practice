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
$fact=1;
$num = $_POST['num'];


for($i=$num;$i>0;$i--){
    $fact = $fact*$i;
}

echo "The factorial of $num is : ",$fact;



?>