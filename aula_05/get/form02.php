<?php 

    $num01 = $_GET['num1'];
    $num02 = $_GET['num2'];
    $num03 = $_GET['num3'];

    if ($num01 > $num02 && $num01 > $num03):
        echo "O primeiro número, $num01, é o maior";
    elseif ($num02 > $num01 && $num02 > $num03):
        echo "O segundo número, $num02, é o maior";
    else:
        echo "O terceiro número, $num03, é o maior";
    endif;
?>