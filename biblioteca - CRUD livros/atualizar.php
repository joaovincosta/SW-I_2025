<?php
    require 'conexao.php';

    $id = 1;
    $novoGenero = "Ficção Científica para Adolescentes";

    $sql = "UPDATE livros SET genero = :genero WHERE id = :id";
    
    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':genero', $novoPreco);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        echo "Livro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar livro.";
    }
?>