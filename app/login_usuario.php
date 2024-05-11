<?php
require_once('../app/database/classes/Cliente.php');
require_once('../app/database/DAO/ClientesDAO.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Instancia o ClienteDAO
    $clienteDAO = new ClienteDAO();

    if ($clienteDAO->autenticar($email, $senha)) {
       
        echo 'Login feito com sucesso!';
        exit(); 
    } else {
       
        header('location: login.php');
        
    }
}
?>
