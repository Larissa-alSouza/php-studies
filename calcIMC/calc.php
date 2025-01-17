<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
</head>
<body>
    <main>
        <?php
        $peso = $_POST["peso"];
        $altura = $_POST['altura'];

        function calcularImc($peso, $altura)
        {
            return $peso / ($altura * $altura);
        }

        $imc = calcularImc($peso, $altura);

        echo "O seu imc é: " .$imc;
        ?>
    </main>
</body>
</html>