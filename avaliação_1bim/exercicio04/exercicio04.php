<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 04 - Avaliação de SW1 do 1º Bimestre</title>
</head>
<body>
    <h2>Olá, de novo!</h2>
    <?php
        $multiplode3 = [];

        for ($i = 3; $i <= 100; $i += 3) {
            $multiplode3[] = $i; 
        }

        $soma = 0;
        foreach ($multiplode3 as $num) {
            $soma += $num;
        }

        echo "A soma de todos os números de 1 até 100 que são múltiplos de 3 é: $soma";
    ?>
</body>
</html>