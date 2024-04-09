
<?php 
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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

     $sheldon = new Avista(14.00, "094-543-665-48");
    $sheldon->realizarPagamento(13.00);
   
    
    
    ?>

</body>
</html>