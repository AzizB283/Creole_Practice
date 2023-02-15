<?php

function alternatingCaps($str) {
    $result = '';
    $chars = str_split($str); 
    $index = 0;
  
    foreach ($chars as $char) {
      if (ctype_alpha($char)) { 
        if ($index % 2 == 0) {
          $result .= strtoupper($char);
        } else {
          $result .= strtolower($char);
        }
        $index++; 
      } else {
        $result .= $char; 
      }
    }
  
    return $result;
  }
  
 
  echo alternatingCaps("I am a string"); 
  



?>