<?php 

    $nota01 = $_GET['nota1'];
    $nota02 = $_GET['nota2'];
    $nota03 = $_GET['nota3'];

    $media = ($nota01 + $nota02 + $nota03) / 3;

    echo "A média de suas três notas é: $media";
    
?>