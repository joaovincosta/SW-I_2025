<?php
    require 'conexao.php';
    $autor = "Suzanne Collins";
    $titulo = "Amanhecer na Colheita";
    $genero = "Distopia";
    $ano = 2025;
    $paginas = 448;
    $sql = "INSERT INTO livros (autor, titulo, genero, ano, paginas) VALUES (:autor, :titulo, :genero, :ano, :paginas)";
    
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':autor', $autor);
    $stmt->bindParam(':titulo', $titulo);
    $stmt->bindParam(':genero', $genero);
    $stmt->bindParam(':ano', $ano);
    $stmt->bindParam(':paginas', $paginas);

    if ($stmt->execute()) {
        echo "Livro inserido com sucesso!";
    } else {
        echo "Erro ao inserir livro.";
    }
?>