<?php
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if ($email == 'aluno@email.com' && $senha == '1234'){
        $nome = "João";
        header('Location: privada.php?nome='.$nome);
    }else{
        header('Location: erro.php');
    }
?>