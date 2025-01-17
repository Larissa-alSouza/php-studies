<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mensagem</title>
</head>
<body>
    <main>
        <?php
            // Verifica se os dados foram enviados via POST
            if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["nome"]) && isset($_POST["email"]) && isset($_POST["senha"])) {
                $nome = $_POST["nome"];
                $email = $_POST["email"];
                $senha = $_POST["senha"];

                // Validando e sanitizando email
                $email_sanitizado = filter_var($email, FILTER_SANITIZE_EMAIL);
                $email_valido = filter_var($email_sanitizado, FILTER_VALIDATE_EMAIL) ? true : false;

                if (!$email_valido) {
                    echo "Email inválido<br>";
                }

                // Validando senha (mínimo de 8 caracteres, letras e números)
                $senha_valida = preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/", $senha) ? true : false;

                if (!$senha_valida) {
                    echo "A senha deve conter pelo menos 8 caracteres, com letras e números.<br>";
                }

                // Exibindo mensagem final
                if ($email_valido && $senha_valida) {
                    echo "O cadastro de " . htmlspecialchars($nome, ENT_QUOTES, 'UTF-8') . " foi realizado com sucesso!";
                } else {
                    echo "Não foi possível realizar seu cadastro.";
                }
            } else {
                echo "Nenhum dado foi enviado.";
            }
        ?>
    </main>
</body>
</html>
