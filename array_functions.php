<form name="form" action="" method="post">
    <label for="">Enter element1 : </label>
  <input type="text" name="input1" id="subject">

  <br>

  <label for="">Enter element2 : </label>
  <input type="text" name="input2" id="subject">

  <br>

  <label for="">Enter element3 : </label>
  <input type="text" name="input3" id="subject">
</form>

<?php

$arr = [];
$input1=$_POST['input1'];
$input2=$_POST['input2'];
$input3=$_POST['input3'];

array_push($arr,$input1,$input2,$input3);

var_dump($arr);


?>