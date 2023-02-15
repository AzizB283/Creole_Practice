<?php
function check($str, $num){
    $index = $str[$num-1];

    // echo $index;

    if($index == "a" || $index == "e" || $index == "i" || $index== "o" || $index == "u" || $index == "A" || $index == "E" || $index == "I" || $index== "O" || $index == "U" ){
       echo "Vowel";
    }
    else{
        echo "Constant";
    }

}

check("hello", 4);
check("Cat", 2);

?>


<!-- <html>
    <head>
        <script>
            function check(str, num) {
                let $index = str.$indexAt(num-1);

                console.log($index);

                if($index == "a" || $index == "e" || $index == "i" || $index== "o" || $index == "u" || $index == "A" || $index == "E" || $index == "I" || $index== "O" || $index == "U" ){
                    document.write("Vowel");
                    console.log("Vowel");
                }
                else{
                    document.write("Consonant");
                    console.log("Consonant");
                }
                
            }

            check("Hello", 4);
            check("Cat",2);
        </script>
</head>

<body>


</body>

</html> -->