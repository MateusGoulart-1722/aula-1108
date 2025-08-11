<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contato</title>
</head>
<body>
    <h1>Fale Conosco</h1>

    <form method="post" action="">
        <label for="nome">Nome:</label><br>
        <input type="text" name="nome"  id="nome" required><br><br>

        <label for="Email">Email:</label><br>
        <input type="text" name="nome"  id="nome" required><br><br>

        <label for="Mensagem">Mensagem:</label><br>
        <textarea name="mensagem" id="mensagem" rows="5" required></textarea>

        <input type="submit" value="Enviar">
    </form>

    <?php
    if ($_SERVER["REQEST_METHOD"] == "POST") {
        $nome = htmlspecialchars ($_post["nome"]);
        $email = htmlspecialchars ($_post["email"]);
        $mensagem = htmlspecialchars ($_post["mensagem"]);

        echo "<h2>Dados Recebidos:</h2>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Email</strong> $email</p>";
        echo "<p><strong>Mensagem</strong> $mensagem</p>";
    }
    ?>
    
</body>
</html>