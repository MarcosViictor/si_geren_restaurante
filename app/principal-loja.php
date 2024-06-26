<?php 
session_start();

// Verifica se o usuário não está autenticado, se não estiver, redireciona para a página de login
if (!isset($_SESSION['autenticado']) || !$_SESSION['autenticado']) {
    header('Location: trooll.php');
    exit();
}



?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurante Dona Florinda</title>
    <link rel="stylesheet" href="../app/css/principal-loja.css">
    <style>
        .formulario-pagamento {
            display: none;
            margin-top: 20px;
        }
        .prato {
            margin-bottom: 20px;
        }
    </style>
    <script>
        function mostrarFormulario(preco, prato) {
            document.getElementById("formulario-pagamento").style.display = "block";
            document.getElementById("preco").value = preco;
            document.getElementById("nome-prato").innerText = prato;
        }
    </script>
</head>
<body>
    <header>
        <div class="logo-nav">
            <figure><img class="logo-img" src="../app/css/imagens/logo-restaurante.svg" alt="Logo do Restaurante Dona Florinda"></figure>
            <h3>Restaurante Dona Florinda</h3>
        </div>
        <div class="user-nav">
            <figure><img class="user-img" src="../app/css/imagens/user-principal.svg" alt="Usuário"></figure>
        </div>
    </header>

    <main>
        <h1 class="texto-principal">Escolha seu prato!</h1>
        <div class="pratos">
            <div class="prato prato-manoelg">
                <figure><img class="img-prato-ajuste" src="../app/css/imagens/foto-manoelg.svg" alt="Prato Manoel Gomes"></figure>
                <h3 class="pratos-ajuste">Prato Manoel Gomes</h3>
                <h4 class="pratos-ajuste">Arroz, pirão, farofa e galinha.</h4>
                <figure><img class="pratos-ajuste" src="../app/css/imagens/stars.svg" alt="Estrelas"></figure>
                <h5 class="pratos-ajuste" name="preco">R$ 11,00</h5>
                <button class="comprar-b" type="button" onclick="mostrarFormulario(11.00, 'Prato Manoel Gomes')">Comprar</button>
            </div>
            <div class="prato prato-ladyg">
                <figure><img class="img-prato-ajuste" src="../app/css/imagens/prato-ladyg.svg" alt="Prato Lady Gaga"></figure>
                <h3 class="pratos-ajuste">Prato Lady Gaga</h3>
                <h4 class="pratos-ajuste">Lasanha e batata palha.</h4>
                <figure><img class="pratos-ajuste" src="../app/css/imagens/stars.svg" alt="Estrelas"></figure>
                <h5 class="pratos-ajuste" name="preco">R$ 12,00</h5>
                <button class="comprar-b" type="button" onclick="mostrarFormulario(12.00, 'Prato Lady Gaga')">Comprar</button>
            </div>
            <div class="prato prato-ts">
                <figure><img class="img-prato-ajuste" src="../app/css/imagens/prato-ts.svg" alt="Prato Taylor Swift"></figure>
                <h3 class="pratos-ajuste">Prato Taylor Swift</h3>
                <h4 class="pratos-ajuste">Arroz, feijão, macarrão e bife.</h4>
                <figure><img class="pratos-ajuste" src="../app/css/imagens/stars.svg" alt="Estrelas"></figure>
                <h5 class="pratos-ajuste" name="preco">R$ 13,00</h5>
                <button class="comprar-b" type="button" onclick="mostrarFormulario(13.00, 'Prato Taylor Swift')">Comprar</button>
            </div>
            <div class="prato prato-luans">
                <figure><img class="img-prato-ajuste" src="../app/css/imagens/prato-luans.svg" alt="Prato Luan Santana"></figure>
                <h3 class="pratos-ajuste">Prato Luan Santana</h3>
                <h4 class="pratos-ajuste">Feijoada, farofa e peixe.</h4>
                <figure><img class="pratos-ajuste" src="../app/css/imagens/stars.svg" alt="Estrelas"></figure>
                <h5 class="pratos-ajuste" name="preco">R$ 14,00</h5>
                <button class="comprar-b" type="button" onclick="mostrarFormulario(14.00, 'Prato Luan Santana')">Comprar</button>
            </div>
            <div class="prato prato-robertoc">
                <figure><img class="img-prato-ajuste" src="../app/css/imagens/prato-robertoc.svg" alt="Prato Roberto Carlos"></figure>
                <h3 class="pratos-ajuste">Prato Roberto Carlos</h3>
                <h4 class="pratos-ajuste">Macarronada, parmesão e frango.</h4>
                <figure><img class="pratos-ajuste" src="../app/css/imagens/stars.svg" alt="Estrelas"></figure>
                <h5 class="pratos-ajuste" name="preco">R$ 15,00</h5>
                <button class="comprar-b" type="button" onclick="mostrarFormulario(15.00, 'Prato Roberto Carlos')">Comprar</button>
            </div>
            <div id="formulario-pagamento" class="formulario-pagamento">
                <h3 id="nome-prato">Pagamento</h3>
                <form action="resultado.php" method="post">
                    <input type="hidden" id="preco" name="preco" value="">
                    <label for="valor_pago">Valor Pago: </label>
                    <input type="number" id="valor_pago" name="valor_pago" step="0.01" required>
                    <button type="submit">Pagamento</button>
                </form>
            </div>
        </div>

        <div class="user-nav">
    <figure><img class="user-img" src="../app/css/imagens/user-principal.svg" alt="Usuário"></figure>
    <a href="logout.php">Sair</a>
</div>
    </main>
</body>
</html>
