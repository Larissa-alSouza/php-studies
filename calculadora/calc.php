<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <main>
        <?php
            $num = $_POST["num_um"];
            $numero = $_POST["num_dois"];
            $opcao = $_POST["operacao"];

            function soma($num, $numero)
            {
                return $num + $numero;
            }

            function subtracao($num, $numero)
            {
                return $num - $numero;
            }

        function multiplicacao($num, $numero)
        {
            return $num * $numero;
        }

        function divisao($num, $numero)
        {
            return $num / $numero;
        }

        switch ($opcao)
        {
            case "selecione":
                echo "Selecione uma opção, por favor";
                break;
            case "adicao":
                $resultado = soma($num, $numero);
                break;
            case "subtracao":
                $resultado = subtracao($num, $numero);
                break;
            case "multiplicacao":
                $resultado = multiplicacao($num, $numero);
                break;
            case "divisao":
                $resultado = divisao($num, $numero);
                break;
        }

        echo "O resultado é: ".$resultado;
        ?>
    </main>
</body>
</html>