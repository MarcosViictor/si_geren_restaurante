
<?php 
    //Expotando as classes para a classe main.
    require_once 'Comida/Marmita.php';
    require_once 'Comida/Ladygaga.php';
    require_once 'Comida/Luansantana.php';
    require_once 'Comida/Robertocarlos.php';
    require_once 'Comida/Taylorswift.php';
    require_once 'Comida/Manoelgomes.php';
    require_once 'Pagamento/Pagamento.php';
    require_once 'Pagamento/Avista.php';
    require_once 'Pagamento/Credito.php';
    require_once 'Pagamento/debito.php';
    require_once 'Pagamento/Pix.php';
    require_once 'Pessoa/Pessoa.php';
    require_once 'Pessoa/Funcionario.php';
    require_once 'Pessoa/Cliente.php';    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tde Backend</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>

    <h1>Seja Bem vindo ao nosso Restaurante, amantes da musica!</h1>
    <?php 

    $marmitaManoelGomes = new MarmitaManoelGomes();
    $marmitaManoelGomes->mostrarCardapio();

    $marmitaLadyGaga = new MarmitaLadyGaga();
    $marmitaLadyGaga->mostrarCardapio();

    $marmitaTaylorSwift = new MarmitaTaylorSwift();
    $marmitaTaylorSwift->mostrarCardapio();

    $marmitaLuanSantana = new MarmitaLuanSantana();
    $marmitaLuanSantana->mostrarCardapio();

    $marmitaRobertoCarlos = new MarmitaRobertoCarlos();
    $marmitaRobertoCarlos->mostrarCardapio();

    
    $taylor = new Funcionario("Taylor", "123.123.123-13", "Caixa");

    echo "<br>";

    $harry = new Cliente("Harry", "321.321.321-31", "Rua Fineline", "8791232-1234");
    $harry->PedirDelivery();

    echo "<br>";

    $harry = new Avista(12.00, "321.321.321-31");
    $harry->realizarPagamento(13.00);


    

    ?>

</body>
</html>