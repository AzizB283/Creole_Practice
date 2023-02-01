<?php

echo "<h3>Cookies in PHP </h3>";

// create cookie using setcookie()
// syntax : setcookie(name, value, expire, path, domain, secure, httponly)

if (isset($_POST['name']) && !empty($_POST['name'])) {
    $c_value = $_POST['name'];

    // To store multiple values in single cookie
    // $c_value = array("name"=>"Aziz","age"=>20,"city" => "Morbi");
    // $str=implode($c_value);

    $c_name = 'user';
    setcookie($c_name, $c_value, time() + 3600, "/", );
}
?>



<html>
    <head></head>
    <body>

        <?php
if (isset($c_value) && !empty($c_value)) {
    echo "User is " . $c_value;
} else {
    echo "Welcome Guest";
}
?>



<form action="<?php $_SERVER['PHP_SELF']?>" method="post">
<br>
<label for="">Enter your name : </label>
<input type="text" name="name" id="">

<input type="submit" value="Submit">
</form>
    </body>
</html>

