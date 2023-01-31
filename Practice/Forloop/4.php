<?php

for($row=0;$row<5;$row++){
    for($col=0;$col<$row+1;$col++){

    echo "*";
    }
    
    echo "<br>";
}

for($row=0;$row<5;$row++){
    for($col=4;$col>$row;$col--){

    echo "*";
    }
    
    echo "<br>";
}

?>