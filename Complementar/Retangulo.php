<?php

include_once 'Retangulo.class.php';

$ret = new Retangulo();
$ret->setLargura(5);
$ret->setAltura(3);

echo "Largura: " . $ret->getLargura() . "<br>";
echo "Altura: " . $ret->getAltura() . "<br>";
echo "Área: " . $ret->calcularArea() . "<br>";
echo "Perímetro: " . $ret->calcularPerimetro();

?>