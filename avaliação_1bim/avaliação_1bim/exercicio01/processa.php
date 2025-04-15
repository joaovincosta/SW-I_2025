<?php
    $primeiranota = $_POST['nota01'];
    $segundanota = $_POST['nota02'];
    $terceiranota = $_POST['nota03'];

    $media = ($primeiranota + $segundanota + $terceiranota) / 3;

    if ($media >= 7) {
        echo "Parabéns, você foi aprovado!";
    } elseif ($media > 5 && $media <= 6.9) {
        echo "Ah... você está de recuperação!";
    } else {
        echo "Que pena, você foi reprovado...";
    }
?>