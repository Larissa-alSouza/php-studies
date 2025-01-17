<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de produto</title>
</head>
<body>
    <main>
        <?php
            $item = $_POST["item"];
            $preco = $_POST["preco"];
            $qnt = $_POST["qnt"];
            $cadastro = [];

            function cadProduto($item, $preco, $qnt, &$cadastro)
            {
                $cadastro [] = ['item' => $item, 'preco' => $preco, 'qnt' => $qnt];
            }

            cadProduto($item, $preco, $qnt, $cadastro);

            foreach ($cadastro as $ficha)
            {
                echo "Item: ".$ficha['item']."<br>";
                echo "Preço: ".number_format($ficha['preco'], 2, ',', '.')."<br>";
                echo "Quntidade: ".$ficha['qnt']."<br>";
            }
        ?>
    </main>
</body>
</html>