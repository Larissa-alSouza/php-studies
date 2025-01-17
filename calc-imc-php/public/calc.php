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
        $peso = $_POST["pesokg"];
        $alt = $_POST["altura"];
        $result = $peso / ($alt * $alt);

        echo "Seu IMC é de: ". number_format($result, 1); 
        echo "<br>";

        if ($result <= 16.9){
            echo "Você está muito abaixo do peso";
        } elseif ($result > 17 && $result <= 18.4){
            echo "Você está abaixo do peso";
        } elseif ($result >= 18.5 && $result <= 24.9){
            echo "Você está em peso normal";
        } elseif ($result >= 25 && $result <= 29.9){
            echo "Você está acima do peso";
        } elseif ($result >= 30 && $result <= 34.9){
            echo "Você está com obesidade grau I";
        } elseif ($result >= 35 && $result <= 40){
            echo "Você está com obesidade grau II";
        } elseif ($result > 40){
            echo "Você está com obesidade grau III";
        }
        ?>
    </main>
</body>
</html>