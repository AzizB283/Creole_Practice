<?php

function repeat($str, $num) {
    $count = array();
    $rechars = array();
  
    for ($index = 0; $index < strlen($str); $index++) {
      $char = $str[$index];
      if (isset($count[$char])) {
        $count[$char]++;
      } else {
        $count[$char] = 1;
      }
    }

    foreach ($count as $char => $count) {
      if ($count >= $num) {
        array_push($rechars, $char);
      }
    }
  
    return $rechars;
  }
  

  print_r(repeat("abcddef", 2)); 
  print_r(repeat("tfghhhplffzaaa", 3)); 
  
?>


