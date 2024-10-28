<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Bem-vindo ao Site!</h1>
        <p>Por favor, faça o login para continuar:</p>
        <form action="login.php" method="POST">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit">Entrar</button>
        </form>
    </div>
</body>

</html>