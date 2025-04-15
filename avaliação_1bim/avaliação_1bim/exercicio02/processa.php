<?php
    $celsius = $_GET['tempcelsius'];

    $fahrenheit = ($celsius * 9/5) + 32;
    $kelvin = $celsius + 273.15;

    echo "Em Fahrenheit, essa temperatura fica $fahrenheit graus<br>";
    echo "Em Kelvin, essa temperatura fica $kelvin";
?>