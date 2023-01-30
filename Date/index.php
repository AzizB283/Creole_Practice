<?php
// checkdate function - check if date are valid 
// syntax (month,date,year)
var_dump(checkdate(31,31,2023));
echo "<br>";
var_dump(checkdate(10,31,2023));
echo "<br>";
var_dump(checkdate(12,21,-2022));
echo "<br>";
var_dump(checkdate(-12,2,2022));
echo "<br>";
var_dump(checkdate(2,29,2022));



// date_create 
echo "<br>";
$date = date_create("2022/03/28",timezone_open("Indian/Reunion"));
var_dump ($date);
echo "<br>";



// date_format

echo date_format($date,"d/m/Y");


// date_add - adds some days, months, years, hours, minutes, and seconds to a date
echo "<br>";
date_add($date,date_interval_create_from_date_string("48 hours"));
echo date_format($date,"d/m/Y");



// date_create_from_format - Return a new DateTime object formatted according to the specified format
echo "<br>";
$date1 = date_create_from_format("d-M-Y","8-Feb-2002");
echo date_format($date1,"j/M/Y");



// date_date_set() - Return a new DateTime object, set a new date, and then format the date
echo "<br>";

$date2 = date_create(NULL,timezone_open("Asia/Kolkata"));

echo date_format($date2,"d:m:Y::h:i:s");

echo "<br>";
date_date_set($date,2020,10,30);
echo date_format($date,"d:m:Y");

echo "<br>";


// date_default_timezone_get 

echo date_default_timezone_get();


// date_default_timezone_set
echo "<br>";
echo date_default_timezone_set("Asia/Kolkata");
echo "<br>";
echo date_default_timezone_get();



// date_diff - Calculate the difference between two dates
echo "<br>";
$diff = date_diff($date1,$date2);
echo $diff->format("%R%a days");


// date_format - Return a new DateTime object, and then format the date
echo "<br>";
echo date_format($date2,"Y/m/d h:i:s");



// date() - Format a local date and time
$date4 = date("l");
echo "<br>";
echo ($date4);
echo "<br>";
echo date("l jS \of F Y h:i:s A");


// get_date 
echo "<br>";
// $mydate=getdate(date("U"));
// echo $mydate[weekday];



// gmdate - UTC Timing
echo gmdate("l jS \of F Y h:i:s A");


// idate - format a local date/time as integer   
echo "<br>";
echo idate("B") . "<br>";
echo idate("d") . "<br>";
echo idate("h") . "<br>";
echo idate("H") . "<br>";
echo idate("i") . "<br>";
echo idate("I") . "<br>";
echo idate("L") . "<br>";
echo idate("m") . "<br>";
echo idate("s") . "<br>";
echo idate("t") . "<br>";
echo idate("U") . "<br>";
echo idate("w") . "<br>";
echo idate("W") . "<br>";
echo idate("y") . "<br>";
echo idate("Y") . "<br>";
echo idate("z") . "<br>";
echo idate("Z") . "<br>";



// localtime - 
print_r(localtime(time(),true));



// mktime - Return the Unix timestamp for a date. Then use it to find the day of that date
echo "<br>";
echo "Mar 8, 2002 was on a ".date("l",mktime(0,0,0,3,28,2002));


// time - Return the current time as a Unix timestamp, then format it to a date
echo "<br>";
$t=time();
echo($t . "<br>");
echo(date("Y-m-d",$t));



// timezone_identifiers_list - Return all timezone identifiers
echo "<br>";
echo "<br>";
echo "<br>";
print_r(timezone_identifiers_list(16));





?>