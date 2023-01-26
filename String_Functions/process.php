<?php

// echo $_POST['input'];


if(!isset($_POST['submit'])){

    // if(!empty($_POST[select])){

        $select = $_POST['select'];
        switch($select){

            case 'strlen':
                echo "String length function : ".strlen($_POST['input'])."<br>";
                break;

            case 'strtoupper':
                 echo "Upper case function : ".strtoupper($_POST['input'])."<br>";
                 break;
            
            case 'strtolower':
                 echo "Lower case function : ".strtolower($_POST['input'])."<br>";
                 break;


            case 'md5':
                  echo "M5 hash function : ".md5($_POST['input'])."<br>";
                  break;


            case 'sha1':
                  echo "Sha1 hash function : ".sha1($_POST['input'])."<br>";
                  break;

            case 'soundex':
                  echo "Sondex function  : ".soundex($_POST['input'])."<br>";
                  break;

            case 'str_repeat':
                  echo "string repeatation function : ".str_repeat($_POST['input'],2)."<br>";
                  break;


            case 'str_pad':
                  echo "String pad function : ".str_pad($_POST['input'],10,".")."<br>";
                  break;


            case 'str_rot13':
                  echo "Rot13 encoding function : ".str_rot13($_POST['input'])."<br>";
                  break;


            case 'str_shuffle':
                  echo "Suffle characters function : ".str_shuffle($_POST['input'])."<br>";
                  break;

            case 'str_word_count':
                  echo "word count function : ".str_word_count($_POST['input'])."<br>";
                  break;


            case 'trim':
                  echo "Trim function : ".trim($_POST['input'])."<br>";
                  break;

            case 'ucfirst':
                 echo "ucfirst Function : ".ucfirst($_POST['input'])."<br>";
                  break;

            case 'lcfirst':
                  echo "lcfirst Function : ".lcfirst($_POST['input'])."<br>";
                  break;

            case 'ucwords':
                  echo "ucwords Function : ".ucwords($_POST['input'])."<br>";
                  break;
                        

            default:
                echo "Enter valid input";
                break;
        }

    } 
 
 
  
  
// }

?>
