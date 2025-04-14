<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela Estilizada com Cores Alternadas (FOR)</title>
</head>
<body>
    <style>
        table, tr, td, th{
            border: 2px solid black;
        }
    </style>
    <table>
        <?php
            for ($linha=1; $linha <= 8; $linha++){
                $cor = ($linha % 2 == 0) ? '#FFDF00' : '#A020F0';
                echo "<tr style='background-color: $cor'>";
                for ($coluna=1; $coluna <= 4; $coluna++) {
                    echo "<td>linha $linha coluna $coluna</td>";
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>