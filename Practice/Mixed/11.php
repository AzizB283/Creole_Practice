<?php

for($row=5; $row>0; $row--){
    for($col=1 ; $col<=$row ; $col++){

        // echo $row;
        switch($row){
         case 1 : 
                echo "E";
                break;

                case 2 : 
                    echo "D";
                    break;


                    case 3 : 
                        echo "C";
                        break;


                        case 4 : 
                            echo "B";
                            break;


                            case 5 : 
                                echo "A";
                                break;
        }

       
    }

    echo "<br>";
}


?>