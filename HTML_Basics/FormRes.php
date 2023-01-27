
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
          
            background-color: #90dada;
            font-family: 'Ubuntu', sans-serif;
        }
        .main{
            
            margin-top:70px;
           
        }

        div{
            
            
            text-align: center;
            padding: 5px;
            border: 2px solid #0c7376;
            border-radius: 4px;
            margin: auto;
            width: 50%;
            font-size:20px;
            
            
        }

    </style>
</head>
<body>

<?php
    echo "<div class=main>";
    echo "<div><b>Hello, ", $_POST['name'],"</b><br> Here's the data that you entered in form</div>";
    echo "<br>";
    echo "<div>Your name is : ",$_POST['name'],"</div>";
    echo "<br>";
    echo "<div>Your email id is : ", $_POST['email'],"</div>";
    echo "<br>";
    echo "<div>Your phone number is : ", $_POST['number'],"</div>";
    echo "<br>";
    echo "<div>Your gender is : ", $_POST['gender'],"</div>";
    echo "<br>";
    echo "<div>Your age is : ",$_POST['age'],"</div>";
    echo "<br>";
    echo "<div>Your address is : ", $_POST['address'],"</div>";
    echo "<br>";
    echo "<div>Your password is : ", $_POST['pass'],"</div>";
    echo "<br>";
    echo "</div>";
    
?>
    
</body>
</html>


