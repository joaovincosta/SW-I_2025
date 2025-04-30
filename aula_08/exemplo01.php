<?php
    include_once 'Pessoa.class.php';

    //CRIAR UM OBJETO - INSTÂNCIA DA CLASSE PESSOA
    $fulano = new Pessoa();
    $ciclano = new Pessoa();

    //var_dump($fulano);

    //ATRIBUIR VALORES
    $fulano->Nome = "João Vinícius Costa";
    $fulano->Peso = 63;
    $fulano->Altura = 1.70;

    $ciclano->Nome = "Fulano de Tal";
    $ciclano->Peso = 70;
    $ciclano->Altura = 1.75;

    //CHAMANDO UM MÉTODO DA CLASSE PESSOA
    $fulano->MostrarDados();
    $fulano->Apresentar();
    $ciclano->MostrarDados();
    $ciclano->Apresentar();
?>