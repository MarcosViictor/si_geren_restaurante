<?php 
<<<<<<< HEAD
require_once 'Comida/Marmita.php';
require_once 'Comida/Ladygaga.php';
require_once 'Comida/Luansantana.php';
require_once 'Comida/Robertocarlos.php';
require_once 'Comida/Taylorswift.php';
require_once 'Comida/Manoelgomes.php';
require_once 'Pagamento/Pagamento.php';
require_once 'Pagamento/AVista.php';
require_once 'Pagamento/Credito.php';
require_once 'Pagamento/Debito.php';
require_once 'Pagamento/Pix.php';
require_once 'Pessoa/Pessoa.php';
require_once 'Pessoa/Funcionario.php';
require_once 'Pessoa/Cliente.php';    
require_once 'DB/Conexao.php';

=======
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
>>>>>>> a7d887d1854c4fd8c422d5e5b9c6d15ece383197
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>Seja Bem vindo ao nosso Restaurante</h1>
    <?php 
<<<<<<< HEAD
=======
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

     echo "<br>";

     $joao = new Funcionario("Joao", "989-765-987-20", "caixa");

     echo "<br>";
     
     $victor = new Cliente("Victor", "098-654-654-21", "epitacio pessoa 465", 8898876521);
     $victor ->PedirDelivery();
    echo "<br>";
     $victor =new Avista(13.00, "098-654-654-21");
     $victor-> realizarPagamento(13.00);
   
>>>>>>> a7d887d1854c4fd8c422d5e5b9c6d15ece383197
    
    $conexao = new Conexao();

    // Criando uma instância de ClienteRepository
    $clienteRepository = new ClienteRepository($conexao);

    // Criando um novo cliente
    $cliente1 = new Cliente("João", "123456", "Rua ABC", "123456789");

    // Salvando o cliente utilizando o ClienteRepository
    $clienteRepository->salvar($cliente1);

    // Realizando um pagamento
    $avista = new AVista(14.00, "094-543-665-48");
    $avista->realizarPagamento(13.00);


    $cliente2 = new Cliente("Evelinda", "123456", "Rua ABC", "1234567");

    $clienteRepository->salvar($cliente2);

    $avista = new AVista(22.00, "094-543-665-48");
    $avista->realizarPagamento(13.00);

    $cliente3 = new Cliente("Olaf", "123456", "Rua ABC", "1234567");
    $clienteRepository->salvar($cliente3);

    $avista = new AVista(35.00, "094-543-665-48");
    $avista->realizarPagamento(13.00);

    echo "<br>";

    ?>

</body>
</html>
