<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de médias</title>
</head>
<body>
    <main>
        <?php 
        $p1 = $_POST["nota1"];
        $p2 = $_POST["nota2"];
        $qz = $_POST["nota3"];
        $ot = $_POST["nota4"];
        $frequencia = $_POST["presenca"];
        $freq = $frequencia / 100;
        $mf = (($p1 * 0.3) + ($p2 * 0.3) + ($qz * 0.2) + ($ot * 0.2));

        if($mf >= 7 && $freq >= 0.75){
            echo "A média final foi de $mf e a frequência de $freq. Aluno aprovado!";
        } else {
            echo "A média final foi de $mf e a frequência de $freq. Aluno reprovado";
        }
        ?>
    </main>
</body>
</html>