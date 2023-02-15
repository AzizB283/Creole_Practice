<?php

echo "<h2><center>Iterables</center></h2>";

echo "<h3>Example 1</h3>";
function printIterable(iterable $itr) {
    foreach($itr as $item) {
      echo $item;
    }
  }
  
  $arr = ["a", "b", "c"];
  printIterable($arr);



  echo "<h3>Example 2</h3>";

  function getIterable():iterable {
    return ["a", "b", "c", "d", "e"];
  }
  
  $itr = getIterable();
  foreach($itr as $item) {
    echo $item;
  }



  echo "<h3>Example 3</h3>";

  
?>