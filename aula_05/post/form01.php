<?php 

    $usuario=$_POST['user'];
    $senha=$_POST['key'];

    if ($usuario == "etec" && $senha == "informática"):
        echo "Logado com sucesso!";
    else:
        echo "Usuário ou senha incorretos. Tente novamente";
    endif;

?>