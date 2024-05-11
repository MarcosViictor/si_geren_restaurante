<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../app/css/login.css">
    
    <title>Document</title>
</head>
<body>
    <form action="login_usuario.php" method="post">
    <div class="login">
            <h1>Entrar na sua conta</h1>

            <input type="email" placeholder="Email" name="email">
            <input type="password" placeholder="Senha" name="senha">

            <input class="entrar-button" type="submit" value="enviar" name="submit">

        </div>
            
        <div class="adm">
            <a href="cadastro.php">Não tem uma conta? cadastre-se.</a>
        </div>

        

    </div>
        
    </form>
</body>
</html>