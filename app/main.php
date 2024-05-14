<?php 
require_once '../app/database/DAO/MarmitaDAO.php';
require_once '../app/database/conexao.php';
require_once '../app/database/classes/Marmita.php';

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

    <?php 
        //Inserindo na tabela marmitas todas as marmitas que estão no front end. 
        $marmita_lady = new Marmita("Lady Gaga", "Lasanha e batata palha", "12,00");
        $marmita_ladyDAO = new MarmitaDAO();
        $marmita_ladyDAO ->create($marmita_lady);  
        //Inserindo na tabela 

        $marmita_ts = new Marmita("Taylor Swift", "Arroz, feijão, macarrão e bife", "13,00");
        $marmita_tsDAO = new MarmitaDAO();
        $marmita_tsDAO -> create($marmita_ts);

        $marmita_luan = new Marmita("Luan Santana", "Feijoada, farofa e peixe.", "14,00");
        $marmita_luanDAO = new MarmitaDAO();
        $marmita_luanDAO -> create($marmita_luan);

        $marmita_roberto = new Marmita("Roberto Carlos", "Macarronada, parmesão e frango.", "15,00");
        $marmita_robertoDAO = new MarmitaDAO();
        $marmita_robertoDAO ->create($marmita_roberto)
    
    
    ?>

 
</body>
</html>
