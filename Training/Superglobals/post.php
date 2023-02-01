<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Method</title>
</head>
<body>

<h3>Post Method</h3>
<p>It is used collect sensitive data like password. Also, there is no limit of data size</p>

<form action="posttest.php" method="post">
    <label for="">Enter your name : </label>
    <input type="text" name="name" id=""><br><br>

    <label for="">Enter your email : </label>
    <input type="email" name="email" id=""><br><br>

    <label for="">enter password : </label>
    <input type="password" name="pass" id=""><br><br>

    <input type="submit" value="Submit">
</form>
    
</body>
</html>