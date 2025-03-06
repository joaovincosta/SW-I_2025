<?php 

    $num01 = $_GET['num1'];
    $num02 = $_GET['num2'];
    $num03 = $_GET['num3'];

    if ($num01 > $num02 && $num01 > $num03):
        echo "O primeiro número, $num01, é o maior";
    endif;
?>