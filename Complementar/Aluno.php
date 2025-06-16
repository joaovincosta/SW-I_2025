<?php

    include_once 'Aluno.class.php';

    $fulano = new Aluno('Fulano da Silva', 5,7);

    echo "Nome: " . $fulano->getNome() . "<br>";

    $fulano->VerificarSituacao($fulano->CalculaMedia($fulano->getNota1(),$fulano->getNota2()));

    echo "<br>";

    echo "Média: " . $fulano->CalculaMedia($fulano->getNota1(),$fulano->getNota2());

?>