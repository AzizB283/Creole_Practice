<?php
// function check($str, $num){
//     $index = strpos($str,$num);

//     echo $index;
// }

// check("hello", "e");

?>


<html>
    <head>
        <script>
            function check(str, num) {
                let char = str.charAt(num-1);

                console.log(char);

                if(char == "a" || char == "e" || char == "i" || char== "o" || char == "u" || char == "A" || char == "E" || char == "I" || char== "O" || char == "U" ){
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

</html>