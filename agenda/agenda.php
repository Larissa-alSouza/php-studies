<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatatos</title>
</head>
<body>
    <main>
        <?php

        $nome = $_POST["nome"];
        $telefone = $_POST["telefone"];
        $agenda = [];
        
        function adicionarContato($nome, $telefone, &$agenda)
        {
            $agenda[] = ['nome' => $nome, 'telefone' => $telefone];
        }

        adicionarContato($nome, $telefone, $agenda);

        echo "O contato de $nome foi adicionado à sua agenda.<br><br>";

        foreach ($agenda as $contato) {
            echo "Nome: " . $contato['nome'] . "<br>";
            echo "Telefone: " . $contato['telefone'] . "<br><br>";
        }
        ?>
    </main>
</body>
</html>