<form name="form" action="" method="post">
    <label for="">Enter element1 : </label>
  <input type="text" name="input1" id="subject">
</form>


<?php


$str_len = strlen($_POST['input']);
echo "String length function : ".strlen($_POST['input'])."<br>";
echo "Upper case function : ".strtoupper($_POST['input'])."<br>";
echo "Lower case function : ".strtolower($_POST['input'])."<br>";
echo "M5 hash function : ".md5($_POST['input'])."<br>";
echo "Sha1 hash function : ".sha1($_POST['input'])."<br>";
echo "Sondex function  : ".soundex($_POST['input'])."<br>";
echo "string repeatation function : ".str_repeat($_POST['input'],2)."<br>";
echo "String pad function : ".str_pad($_POST['input'],10,".")."<br>";
echo "Rot13 encoding function : ".str_rot13($_POST['input'])."<br>";
echo "Suffle characters function : ".str_shuffle($_POST['input'])."<br>";
echo "word count function : ".str_word_count($_POST['input'])."<br>";
echo "Trim function : ".trim($_POST['input'])."<br>";
echo "ucfirst Function : ".ucfirst($_POST['input'])."<br>";
echo "lcfirst Function : ".lcfirst($_POST['input'])."<br>";
echo "ucwords Function : ".ucwords($_POST['input'])."<br>";







?>
