<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moeda</title>
</head>
<body>
    <main>
        <?php
        $valor = $_POST["valor"];
        $taxa = $_POST["taxa"];

        function taxaCambio($valor, $taxa)
        {
            return $valor * $taxa;
        }

        $conversao= taxaCambio($valor, $taxa);

        echo "O valor convertido é: " .number_format($conversao, 1);;
        ?>
    </main>
</body>
</html>