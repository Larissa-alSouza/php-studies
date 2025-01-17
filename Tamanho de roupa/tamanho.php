<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saiba seu tamanho de roupa</title>
</head>
<body>
    <main>
        <?php
            $busto = $_POST['busto'];
            $cintura = $_POST['cintura'];
            $quadril = $_POST['quadril'];

            function calcularMedidas($busto, $cintura, $quadril)
            {
                if($busto >=77 && $busto <= 81 && $cintura >=58 && $cintura <= 62 && $quadril >= 86 && $quadril <= 90){
                    return "O tamanho 34 deve ficar bom em você!";
                } elseif($busto >= 81 && $busto <= 85 && $cintura >= 62 && $cintura <= 66 && $quadril >= 90 && $cintura <= 94){
                    return "O tamanho 36 deve ficar bom em você";
                } elseif($busto >= 85 && $busto <= 89 && $cintura >= 66 && $cintura <= 70 && $quadril >= 94 && $cintura <= 98){
                    return "O tamanho 38 deve ficar bom em você";
                } elseif($busto >= 89 && $busto <= 93 && $cintura >= 70 && $cintura <= 74 && $quadril >= 98 && $cintura <= 102){
                    return "O tamanho 40 deve ficar bom em você";
                } elseif($busto >= 93 && $busto <= 97 && $cintura >= 75 && $cintura <= 78 && $quadril >= 102 && $cintura <= 106){
                    return "O tamanho 42 deve ficar bom em você";
                } elseif($busto >= 97 && $busto <= 101 && $cintura >= 78 && $cintura <= 82 && $quadril >= 106 && $cintura <= 110){
                    return "O tamanho 44 deve ficar bom em você";
                } elseif($busto >= 101 && $busto <= 105 && $cintura >= 82 && $cintura <= 86 && $quadril >= 110 && $cintura <= 114){
                    return "O tamanho 46 deve ficar bom em você";
                }
            }

            $resultado = calcularMedidas($busto, $cintura, $quadril);
            echo $resultado;
        ?>
    </main>
</body>
</html>