<?php
    include_once 'Conta.class.php';

    $conta1 = new Conta();

    $conta1->Nome = "João Vinícius Costa";
    $conta1->Cpf = "123.456.789-00";

    $conta1->MostrarSaldo();

    echo "<hr>";

    echo $conta1->Depositar(500);

    echo "<br>";

    echo "<hr>";

    $conta1->MostrarSaldo();

    echo "<hr>";

    echo $conta1->Sacar(500);

?>