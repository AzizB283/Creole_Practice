<?php

for($i=0;$i<5;$i++){
    for($j=5; $j > $i + 1; $j--){
        echo "&nbsp;";
    }
    for($k=0; $k <= $i; $k++){
        echo "*";
    }
    echo "<br>";
}

echo "<br><br>";



for($i=0;$i<5;$i++){
    for($j=5; $j > $i + 1; $j--){
        echo "&nbsp;&nbsp;";
    }
    for($k=0; $k <= $i; $k++){
        echo "*";
    }
    echo "<br>";
}


echo "<br><br>";



for($i=5; $i > 0; $i--){
    for($j = 0; $j < $i ; $j++){
        echo "*";
    }
    echo "<br>";
}


echo "<br><br>";

for($i=0; $i < 5 ; $i++){
    for($j =0; $j < 5; $j++){
        if($j<$i){
            echo "&nbsp;&nbsp;";
        }
        else{
            echo "*";
        }
    }
    echo "<br>";
}

echo "<br><br>";

for($i=0; $i < 5 ; $i++){
    for($j =0; $j < 5; $j++){
        if($j<$i){
            echo "&nbsp;";
        }
        else{
            echo "*";
        }
    }
    echo "<br>";
}
?>