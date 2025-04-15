<?php
    $numero = $_GET['num'];

    if ($numero % 2 ==  0) {
        echo "O número digitado é par!";
        return true; 
    } else {
        echo "O número digitado é ímpar!";
        return false;
    }
?>