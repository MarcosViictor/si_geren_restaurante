<?php 
require_once('../app/database/classes/Cliente.php');
require_once('../app/database/DAO/ClientesDAO.php');

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];

    if (!empty($nome) && !empty($email) && !empty($senha) && !empty($endereco) && !empty($telefone)) {
        $cliente = new Cliente($nome, $email, $senha, $endereco, $telefone);
        $clienteDAO = new ClienteDAO();
        $clienteDAO->create($cliente);
        echo "Cliente cadastrado com sucesso!";
    } else {
        echo "Por favor, preencha todos os campos do formulário.";
    }
}




?>
