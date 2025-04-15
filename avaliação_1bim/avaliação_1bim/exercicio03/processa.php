<?php
    $numero = $_GET['num'];

    $fatorial = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $fatorial *= $i;
    }

    echo "O fatorial do número informado, $numero, é: $fatorial";
?>