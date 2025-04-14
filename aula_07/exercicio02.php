<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Dinâmica com Input do Usuário (WHILE)</title>
</head>
<body>
    <style>
        table, th, td {
            border: 2px solid black;
        }
    </style>
    <form method="post">
        <label for="linhas">Digite um número para as linhas:</label>
        <input type="number" name="linhas" id="linhas" min="1" required>
        <br>
        <label for="colunas">Digite um número para as colunas:</label>
        <input type="number" name="colunas" id="colunas" min="1" required>
        <br><br>
        <input type="submit" value="Gerar Tabela">
        <br><br>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $linhas = intval($_POST["linhas"]);
        $colunas = intval($_POST["colunas"]);

        echo "<table>";
        $i = 1;
        while ($i <= $linhas) {
            echo "<tr>";
            $j = 1;
            while ($j <= $colunas) {
                echo "<td>Linha $i Coluna $j</td>";
                $j++;
            }
            echo "</tr>";
            $i++;
        }
        echo "</table>";
    }
    ?>
</body>
</html>