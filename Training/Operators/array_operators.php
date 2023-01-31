<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <form action="array_process.php" method="post">
        <label for="">Enter array 1 (Seperate by comma) : </label>
        <input type="text" name="arr1" id=""> <br><br>


        <label for="">Enter array 2 (Seperate by comma): </label>
        <input type="text" name="arr2" id=""><br><br>

        <label for="">Enter only four elements in union function</label>
        <br><br>

        <select name="operator" id="">
            <option value="" selected disabled>Select an operator</option>
            <option value="" disabled><b>Array Operators</b></option>
            <option value="eqlt">Equality(==)</option>
            <option value="strcteqlt">Strict Equality(===)</option>
            <option value="ineqlt">Inequality(!=)</option>
            <option value="strctineqlt">Strict Inequality(!==)</option>
            <option value="union">Union(+) - Static</option>
        
        </select><br><br>

        <input type="submit" value="Submit">

    </form>
</body>
</html>
