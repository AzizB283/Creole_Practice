<?php

echo "<h3>Session in PHP</h3>";

// unlike cookie, when you close the browser the session will be cleared

// session is startedd with session_start()

session_start();

?>

<!DOCTYPE html>
<html>
<body>

<?php

$_SESSION["name"] = "Aziz";
$_SESSION["age"] = "20";
echo "Session variables are set.<br>    ";

echo "Welcome, " . $_SESSION["name"] . ".<br>";
echo "Your age is " . $_SESSION["age"]."<br>";

// return value of unset
// _DISABLED = 0
// _NONE = 1
// _ACTIVE = 2

if (isset($_SESSION['page_count'])) {
    $_SESSION['page_count'] += 1;
} else {
    $_SESSION['page_count'] = 1;
}
echo 'You are visitor number ' . $_SESSION['page_count'];

echo "<br>";
echo session_unset();
echo "<br>";
echo session_destroy();
echo "<br>";
echo session_status();
echo "<br>";

echo "Welcome, " . $_SESSION["name"] . ".<br>";
?>

</body>
</html>