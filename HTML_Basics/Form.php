<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        body {
            background-color: #90dada;
            font-family: 'Ubuntu', sans-serif;

        }

        div {
            text-align: center;
            padding: 5px;
            border: 2px solid #0c7376;
            border-radius: 4px;
            margin: auto;
            width: 40%;
        }

        h2 {
            color: #0c7376;
            text-align: center;
        }

        .button {
            background-color: #90dada;
            padding: 4px;
            margin: auto;
            font-size: 16px;
            cursor: pointer;
            border-radius: 6px;
        }

        .button:hover {
            background-color: #0c7376;
        }

        input{
            border: 1px solid black;
            border-radius:5px;
            padding:5px;
        }

        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
    </style>
</head>

<body>
    <center>
    <h2>This is a HTML Form</h2>
        <form method="post" action="FormRes.php" >

            <div>
                <label for="">Name :</label>
                <input type="text" name="name" id="">
                <br>
            </div>
            <br>

            <div>
                <label for="">Email :</label>
                <input type="email" name="email" id="">
                <br>
            </div>
            <br>

            <div>
                <label for="">Number :</label>
                <input type="number" name="number" id="">
                <br>
            </div>
            <br>
            <div>
                <label for="">Gender :</label>
                <select name="gender" id="">
                    <option value="" selected disabled>Select</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Prefer not to say">Prefer not to say</option>
                    <br>
                </select>

            </div>
            <br>
            <div>
                <label for="">Are you over 18 ?</label>
                <input type="radio" name="age" value="Yes" id="">Yes
                <input type="radio" name="age" value="No" id="">No
                <br>
            </div>
            <br>

            <div>
                <label for="">Address :</label><br>
                <textarea name="address" id="" cols="30" rows="10"></textarea>
            </div>
            <br>

            <div>
                <label for="">Enter Password : </label>
                <input type="password" name="pass" id="">
                <br>
            </div>

            <br>
            <div>
                <label for=""></label>
                <input type="checkbox" name="" id="">You are accepting our privacy policy
            </div>
            <br>
            <input type="submit" value="Submit" class="button">

        </form>

    </center>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
</body>

</html>



