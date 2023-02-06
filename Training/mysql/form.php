<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        *{
            margin : auto;
            text-align : center;
            background-color : white;
        }

        form{
            border : 2px solid black;
            border-radius : 15px;
            width : 500px;
            padding : 40px;
            margin-top : 30px;
            font-size : 18px;
            /* background-color : blue; */
            
        }

        h1{
            margin-top : 40px;
            color : blue;
            text-decoration : underline;

        }

        #submit{
            font-size : 16px;
            border : 2px solid black;
            border-radius : 5px;
            cursor: pointer;
            padding : 8px;
        }

        input {
            /* border : 1px solid white; */
            border-radius : 5px;
            margin : 0 10px;
            padding : 5px 10px;
            /* font-weight : bold; */
        }

        label {
            border : 1px solid white;
            border-radius : 5px;
            padding : 0 10px;
            font-weight : bold;
        }

        textarea{
            border : 2px solid black;
            border-radius : 5px;
        }


    </style>
</head>
<body>
    <center><h1>User Form</h1></center>
    <form action="backend.php" method="post">
        <label for="">Enter your name : </label>
        <input type="text" name="name" id=""><br><br>

        <label for="">Enter your email : </label>
        <input type="text" name="email" id=""><br><br>

        <label for="">Enter your age : </label>
        <input type="number" name="age" id=""><br><br>

        <label for="gender">Select Gender : </label>
        
        <input type="radio" name="gender" id="Male" value="Male">
        <label for="Male">Male</label>

        <input type="radio" name="gender" id="Female" value = "Female">
        <label for="Female">Female</label>

        <input type="radio" name="gender" id="Prefer not to say" value = "Prefer not to say">
        <label for="Prefer not to say">Prefer not to say</label>
        <br><br>

        <label for="">Enter Address : </label><br>
        <textarea name="address" id="" cols="30" rows="10"></textarea><br><br>

        <input type="submit" value="Submit" id="submit">
    </form>
</body>
</html>