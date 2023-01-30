<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>
<body>
    <form action="process.php" method="post">
        <label for="">Enter number 1 : </label>
        <input type="number" name="num1" id=""> <br><br>


        <label for="">Enter number 2: </label>
        <input type="number" name="num2" id=""><br><br>

        <select name="operator" id="">
            <option value="" selected disabled>Select an operator</option>
            <option value="" disabled><b>Arithmetic Operators</b></option>
            <option value="add">Addition(+)</option>
            <option value="sub">Subtraction(-)</option>
            <option value="mul">Multiplication(*)</option>
            <option value="div">Division(/)</option>
            <option value="mod">Modulo(%)</option>
            <option value="exp">Exponential(**)</option>
            <option value="" disabled><b>Assignment Operators</b></option>
            <option value="asadi">Assignment Addition(+=)</option>
            <option value="assub">Assignment Subtraction(-=)</option>
            <option value="asmul">Assignment Multiplication(*=)</option>
            <option value="asdiv">Assignment Division(/=)</option>
            <option value="asmod">Assignment Modulas(%=)</option>
            <option value="" disabled><b>Comparison Operators</b></option>
            <option value="dbleql">Equal or not(==)</option>
            <option value="tpleql">Strict Equal or not(===)</option>
            <option value="noteql">Not equal to(!=)</option>
            <option value="strnoteql">Strict not equal to(!==)</option>
            <option value="grtr">Greater than(>)</option>
            <option value="lsthn">Less than(<)</option>
            <option value="grtreql">Greater than equal to(>=)</option>
            <option value="lsthneql">Less than equal to(<=)</option>
            <option value="" disabled><b>Increament/Decrement Operators</b></option>
            <option value="preincr">Pre-increament of num1</option>
            <option value="postincr">Post-increament of num1</option>
            <option value="predecr">Pre-decreament of num1</option>
            <option value="postdecr">Post-decreament of num1</option>
            <option value="" disabled>Logical Operators</option>
            <option value="and">AND Operator(&&)</option>
            <option value="or">OR Operator(||)</option>
            <option value="xor">XOR Operator</option>
            <option value="not">Not(!)</option>
            

        </select><br><br>

        <input type="submit" value="Submit">

    </form>
</body>
</html>
