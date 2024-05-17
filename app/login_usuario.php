<?php
session_start();
require_once('../app/database/classes/Cliente.php');
require_once('../app/database/DAO/ClientesDAO.php');
//Importando minhas classes. 

if (isset($_POST['submit'])) {
    //A função isset verifica se uma variavel não é NULL, ela só dá a resposta se for true. Aqui no caso no submit. Que está mencionado no meu botão no HTML.
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    //Filtrando dados do formulario por meio do metodo post.
    $clienteDAO = new ClienteDAO();
    //Inicio o obejto DAO para usar sua função autenticar que faz um select na tabela cliente. 
    if ($clienteDAO->autenticar($email, $senha)){
    //Verifica-se se tem um email e senha para poder permitir o acesso.
        $_SESSION['autenticado'] = true;
        header('location: principal-loja.php');
        exit(); 
    } else {
        header('location: login.php');
        
    }
}
?>
