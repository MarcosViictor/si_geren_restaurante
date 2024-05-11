<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/css/login.css">
    <title>Criar Conta</title>
</head>
<body>
<form action="cadastrar_usuario.php" method="post">
    <div class="login">
        <h1>Criar Conta</h1>

        <input type="text" placeholder="Nome" name="nome">
        <input type="email" placeholder="Email" name="email">
        <input type="tel" placeholder="Telefone" name="telefone">
        <input type="text" placeholder="Endereço" name="endereco">
        <input type="password" placeholder="Senha" name="senha">
        <a href="login.php">Já tem uma conta faça login!</a>
        <br>
        <button class="login" type="submit">Criar</button>
    </div>
</form>
</body>
</html>
