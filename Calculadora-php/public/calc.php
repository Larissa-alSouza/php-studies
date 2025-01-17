<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <header>
        <h1>Resultado</h1>
    </header>
    <main>
        <?php 
        $num = $_POST["num_um"];
        $numero = $_POST["num_dois"];
        $opcao = $_POST["operacao"];

        switch($opcao){
            case "selecione":
                echo "Selecione alguma operação, por favor";
                break;
            case "adicao":
                $result = $num + $numero;
                echo "O resultado é: $result";
                break;
            case "subtracao":
                $result = $num - $numero;
                echo "O resultado é: $result";
                break;
            case "multiplicacao":
                $result = $num * $numero;
                echo "O resultado é: $result";
                break;
            case "divisao":
                $result = $num / $numero;
                echo "O resultado é: $result";
                break;
        }
        ?>
    </main>
</body>
</html>
