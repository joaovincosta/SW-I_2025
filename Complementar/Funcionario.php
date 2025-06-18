<?php

include_once 'Funcionario.class.php';

$func = new Funcionario("João", 2500);
echo $func->exibirInformacoes();
echo "<hr>";

echo "Aumentando salário em 10%<br>";
$func->aumentarSalario(10);
echo $func->exibirInformacoes();

?>