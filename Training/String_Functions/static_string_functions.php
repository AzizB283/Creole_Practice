<?php

// addcslashes functions - add slashes before characters
// stripcslashes - removes the backslashes added by the addcslashes function

$str=addcslashes("Hello Aziz","A");
echo($str);



$str1 = "Hello, How r u?";
echo "<br>";
echo addcslashes($str1,'H');
echo "<br>";
echo addcslashes($str1,'o');
echo "<br>";




// addslashes function - add slashes before double quote
// stripslashes removes the slashes added by addslashes function
$str2 = addslashes('My name is "Aziz"');
echo($str2);


// bin2hex funtion - convert to hexadecimal
echo "<br>";
$str3 = bin2hex("Hello World!");
echo($str3);



// chop function - used to remove characers from right side

echo "<br>";
$str4 = "Hello World!";
echo chop($str4,"World!");




// chr function - return characters from different ASCII values
echo "<br>";
$str5 = chr(57);
echo ($str5);



//chunk_split function - split the string after each character and add a "." after each split

echo "<br>";
$str6 = "how are you";
echo chunk_split($str6,1,".");



//convert_cyr_string function - convert string from one character set to another

echo "<br>";
$str7 = "Hello world! æøå";
echo convert_cyr_string($str7,'w','a');



//count_chars - returns a string with all different characters used 

echo "<br>";
$str8 = "Hello world!";
echo count_chars($str8,3);

$str9 = array("a","b","c");
// echo count_chars($str9);


echo "<br>";
// print("Aziz");



// crypt function - To encrypt given string

$str10 = "Aziz";
echo crypt($str10,'qwe');


// echo - write text to output
echo "<br>";
echo "Hi!";



// explode - break a string into array 
echo "<br>";

$str11 = "Hi Aziz";
print_r (explode(" ",$str11));


// fprintf - write into file
echo "<br>";
$file = fopen("test.text","w");
echo fprintf($file,"Hello how u doin?");


// hebrew function - reverse display of hebrew characters

echo "<br>";
echo hebrev("á çùåï äúùñâ");


// hex2bin - convert hexadecimal into ASCII characters

echo "<br>";
echo hex2bin("ffddaa");


// htmlentities - convert string into html entities

echo "<br>";
echo htmlentities("<a href = 'https://techcupid.in/'>TechCupid</a>");



//htmlspecialchars_decode function - convert predefined html entities to characters :

echo "<br>";
echo htmlspecialchars_decode("This is less than (&lt;) and this is (&gt;) sign in html");




//html special chars - convert predefined characters to html entities

echo "<br>";
echo htmlspecialchars("This is <b>bold</b> and this is > sign");


// implode - join array value in string  / Join() can be also used for same 
echo "<br>";

$array = array("Aziz", "Bhavnagarwala");

echo implode(" ",$array);



// lcfirst - used to do lower case the first character

echo "<br>";

echo lcfirst("Hello World!");


// ucfirst - used to do uppercase the first character

echo "<br>";

echo ucfirst("hello world");


// ucwords - convert first character of every word into uppercase

echo "<br>";

echo ucwords("hello world");


// strtoupper - convert a string to uppercase

echo "<br>";

echo strtoupper("aziz is a good boy");


// strtolower - convert string to lowercase

echo "<br>";
echo strtolower("AZIZ IS A GOOD BOY");



// ltrim - remove space from the left side of the string

echo "<br>";
echo ltrim("     Hello world!");


// rtrim - Remove space from the right side of the string

echo "<br>";
echo rtrim("Hello World     ");


// trim - remove white space from both side of the string

echo "<br>";
echo trim("     Hello World    ");




// md5 - md5 hash of the string

echo "<br>";

echo md5("Aziz");



// md5_file - calculate the md5 hash function of a text file

echo "<br>";
$file1 = "test.text";

echo md5_file($file1);



// metaphone - calculates the metaphone key of a string

echo "<br>";
echo ("Metaphone");
echo metaphone("Hello");


// moneyformat 

echo "<br>";
setlocale(LC_MONETARY, "en_US");
$num = 1234;
echo("<b>Error at line 230, money_format function</b>");
// echo money_format("The number is %i:", $num);


// nl2br - insert new line in string

echo "<br>";
echo nl2br("Hi \n How are you");



// number_format - formats a number with grouped thousands

echo "<br>";

echo number_format("1000000"); echo "<br>";
echo number_format("1000000",2);echo "<br>";
echo number_format("1000000",3); echo "<br>";
echo number_format("1000000",4); echo "<br>";






// ord - used to find ASCII value of first character

echo ord("Hello")."<br>";
echo ord("Hello World")."<br>";



// parse_str - parse a query string into variables

parse_str("name=Aziz&age=20");
echo $name;
echo $age;
echo "<br>";

// print - show text in output / Slightly slower than echo

print("Hello")."<br>";

// printf - output a formatted string
$num = 123;

printf("The given number is %u",$num);
echo "<br>";



echo quoted_printable_decode("=0D=0AHello world")."<br>";
echo quoted_printable_encode("Hello world");



// quotemeta - add backslash in front of pre defined characters

echo "<br>";
echo quotemeta("Hello. How r u?");


// setlocale - Set the locale to US English

echo "<br>";
echo setlocale(LC_ALL,"US");


// sha1 hashing function

echo "<br>";
echo sha1("Aziz");
echo "<br>";
echo sha1_file($file1);


// similar_text - check similarity between two strings

$string1 = "Hello";
$string2 = "Hel";

echo "<br>";
echo similar_text($string1,$string2);




// soundex - return four character long alphanumeric string that represent English pronunciation of a word

echo "<br>";
echo soundex("Hello");



// echo str_getcsv("Hello, how are you");


// str_ireplace - Replace the word with another word in string (Case insensitive)
// str_replace - Replace the word with another word in string (Case sensitive)

echo "<br>";

echo str_ireplace("World", "Aziz", "Hello World");


// str_pad - Pad to the right side of the string

echo "<br>";

echo str_pad("Hello Aziz",20,'.');



// str_repeat - repeat the string n number of times

echo "<br>";

echo str_repeat("Aziz",5);


// str_rot13 - encode and decode a string

echo "<br>";

echo str_rot13("Aziz");
echo str_rot13("Nmvm");



//str_shuffle - randomely shuffle all characters of string

echo "<br>";

echo str_shuffle("Aziz");


// str_split - split the string into array 

echo "<br>";

print_r (str_split("Aziz"));



// str_word_count - count the numbers of word

echo "<br>";

echo str_word_count("Hello How r u");



// strcasecmp - compare two strings - if function returnd 0 two strings are same
// strcmp - compare two strings - if function returnd 0 two strings are same (Case sensitive)

echo "<br>";

echo strcasecmp("Hi How r u", "Hi How r u");


// strchr - find first occurance of the word and return rest of the string

echo "<br>";

echo strchr("Hello World how", "World");



// strcspn - Print the number of characters found in "Hello world!" before the character "w":

echo "<br>";

echo strcspn("Hello world", "w");



// stripos - find the first occurance in string

echo "<br>";

echo stripos("Hello World","l");



// stristr - Find the first occurrence of "world" inside "Hello world!", and return the rest of the string:

echo "<br>";

echo stristr("Hello World World", "world");



// strlen - return the length of the string

echo "<br>";

echo strlen("Hello");



// strncmp - compare two strings

echo "<br>";

echo strncmp("Hello world","Hello Aziz",7);


//strrev - reverse a string

echo("<br>");

echo strrev("Aziz");



// strripos - position of last occurance 

echo ("<br>");

echo strripos("Hello llo","lo");



// strstr -Find the first occurrence of "world" inside "Hello world!" and return the rest of the string:

echo ("<br>");

echo strstr("Hello world!","world");


// strtok - split string one by one

echo("<br>");

echo strtok("Hello World"," ");




// substr - returns a part of string

echo "<br>";

echo substr("Hello World", 2);



// substr_count - counts the number of time a substring occur in a string

echo "<br>";

echo substr_count("Hello Hi Hello", "llo");







































?>