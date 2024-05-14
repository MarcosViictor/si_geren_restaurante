<?php
require_once('../app/database/classes/Cliente.php');
require_once('../app/database/DAO/ClientesDAO.php');

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $clienteDAO = new ClienteDAO();

    if ($clienteDAO->autenticar($email, $senha)){

        header('location: principal-loja.html');
        exit(); 
    } else {
        header('location: login.php');
        
    }
}
?>
