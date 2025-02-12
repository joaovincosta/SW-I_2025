<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 03 - PHP</title>
</head>
<body>

    <?php
        $nome = "FULANO" 
    ?>

    <!-- 1° modo -->
    <p> Oi meu nome é: <?php echo "$nome"; ?> </p> 

    <!-- 2° modo -->
    <p> Oi meu nome é: <?php echo $nome; ?> </p>

    <!-- 3° modo -->
    <p> <?php echo "Oi meu nome é: $nome"; ?> </p>

    <!-- 4º modo (não é um parágrafo, é um "text")-->
    <?php echo "Oi meu nome é: $nome"; ?>

    <!-- 5° modo -->
    <?php echo "<p>Oi meu nome é: $nome</p>"; ?>

    <!-- 6° modo (com concatenação) -->
    <?php echo "<p>Oi meu nome é: " . "$nome</p>"; ?> 

</body>
</html>