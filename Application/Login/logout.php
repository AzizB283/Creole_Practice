<?php
session_start();


unset($_SESSION["email"]);
// Unset any saved login cookies
setcookie("email", "", time()-3600);
setcookie("password", "", time()-3600);

// Redirect to the login page
session_destroy();
header("Location: login.php");
exit();
?>
