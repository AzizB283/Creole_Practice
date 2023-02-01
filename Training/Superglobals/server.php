<?php

// SERVER holds information about headers, paths and script locations 

echo "<h3> SERVER </h3>";


echo "The PHP_SELF will return the filename of the currently executing script"."<br>";
echo $_SERVER['PHP_SELF'];
echo "<br><br><br>";

echo "The SERVER_NAME will return the name of the host server "."<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br><br><br>";


echo "The SERVER_ADDR will return the ip address of the host server "."<br>";
echo $_SERVER['SERVER_ADDR'];
echo "<br><br><br>";

echo "The SERVER_SOFTWARE will return the server identification "."<br>";
echo $_SERVER['SERVER_SOFTWARE'];
echo "<br><br><br>";


echo "The HTTP_ACCEPT will accept header from the current request"."<br>";
echo $_SERVER['HTTP_ACCEPT'];
echo "<br><br><br>";


echo "The HTTP_HOST will return the Host header from the current request"."<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br><br><br>";


echo $_SERVER['HTTP_REFERER'].$_SERVER['REQUEST_URI'];
echo "<br><br><br>";

echo "The HTTP_USER_AGENT will return to check browser information"."<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br><br><br>";


echo "The SCRIPT_NAME will return the path of the current script"."<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br><br><br>";


echo "The REQUEST_URI will return the URI of the current page"."<br>";
echo $_SERVER['REQUEST_URI'];
echo "<br><br><br>";



echo "The SERVER_PORT will return the port on the server for communication"."<br>";
echo $_SERVER['SERVER_PORT'];
echo "<br><br><br>";


echo "The SERVER_ADMIN will return the value given to the web server admin"."<br>";
echo $_SERVER['SERVER_ADMIN'];
echo "<br><br><br>";


echo "The REMOTE_PORT return the port being used on user's machine"."<br>";
echo $_SERVER['REMOTE_PORT'];
echo "<br><br><br>";


echo "The REMOTE_HOST return the host name where user is viewing current page";
print_r($_SERVER['REMOTE_HOST']);
echo "<br><br><br>";


echo "The REQUEST_METHOD return the method used to access this page (Such as post)"."<br>";
echo $_SERVER['REQUEST_METHOD'];
echo "<br><br><br>";



echo "The SERVER_PROTOCOL the name and revision of the information protocol"."<br>";
echo $_SERVER['SERVER_PROTOCOL'];
echo "<br><br><br>";


echo "<pre>";
echo "<h3>At last GLOBALS will return every information<br></h3>";
print_r($GLOBALS);
echo "</pre>";


?>