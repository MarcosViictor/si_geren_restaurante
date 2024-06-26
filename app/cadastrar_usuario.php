<?php 
require_once('../app/database/classes/Cliente.php');
require_once('../app/database/DAO/ClientesDAO.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];

    if (!empty($nome) && !empty($email) && !empty($senha) && !empty($endereco) && !empty($telefone)) {
        $cliente = new Cliente($nome, $email, $senha, $endereco, $telefone);
        $clienteDAO = new ClienteDAO();
        $clienteDAO->create($cliente);
        
        // Autenticar o usuário automaticamente
        session_start();
        $_SESSION['autenticado'] = true;

        // Redirecionar para a página principal-loja.php
        header('location: principal-loja.php');
        exit();
    } else {
        header('location: cadastro.php');
        exit();
    }
}
?>
