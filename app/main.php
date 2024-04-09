
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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <h1>Seja Bem vindo ao nosso Restaurante</h1>
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

     echo "<br>";

     $joao = new Funcionario("Joao", "989-765-987-20", "caixa");

     echo "<br>";
     
     $victor = new Cliente("Victor", "098-654-654-21", "epitacio pessoa 465", 8898876521);
     $victor ->PedirDelivery();
    echo "<br>";
     $victor =new Avista(13.00, "098-654-654-21");
     $victor-> realizarPagamento(13.00);
   
    

    ?>

</body>
</html>