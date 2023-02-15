<?php

function check($str) {
  $count = array();
  $maxCount = 0;
  $maxChar = '';


  for ($index = 0; $index < strlen($str); $index++) {
    $char = $str[$index];
    if (isset($count[$char])) {
      $count[$char]++;
    } else {
      $count[$char] = 1;
    }

    if ($count[$char] > $maxCount || ($count[$char] == $maxCount && $char < $maxChar)) {
      $maxCount = $count[$char];
      $maxChar = $char;
    }
  }

  return $maxChar;
}


echo check("abcddefg"); 
echo "<br>";
echo check("heggbdeff"); 


?>
