<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <form action="switch.php" method="post">
        <label for="">Select Your Favorite Car From Dropdown:</label>
        <select name="car" id="">
            <option value="" selected disabled>Select car</option>
            <option value="bmw">BMW</option>
            <option value="audi">Audi</option>
            <option value="mercedes">Mercedes</option>
            <option value="buggati">Buggati</option>
        </select>

        <input type="submit" value="Submit">

    </form>
</body>
</html>