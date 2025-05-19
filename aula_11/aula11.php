<?php

    include_once 'Produto.class.php';
    $produto = New Produto("Lápis", 1.50, 70);
    $produto->AdicionarEstoque(5);
    $produto->RemoverEstoque(20);
    $produto->MostrarDetalhes();

?>