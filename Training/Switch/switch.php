<?php
$car = $_POST['car'];

if(isset($_POST['car'])){

    switch ($car) {
        case "bmw":
        echo "Your favorite car is BMW";
        break;

        case "audi":
        echo "Your favorite car is Audi";
        break;

        case "mercedes":
        echo "Your favorite car is Mercedes";
        break;

        case "buggati":
        echo "Your favorite car is Buggati";
        break;

        default:
        echo "You have no favorite car";

    }
}

?>