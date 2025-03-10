<?php

    $nome=$_POST['name'];
    $email=$_POST['e-mail'];
    $nascimento=$_POST['date'];
    $bandeira_cartao=$_POST['cartao'];

    echo "Ok: $nome, nascido em $nascimento, cujo endereço de e-mail é $email e a bandeira do cartão é $bandeira_cartao. Obrigado!"

?>