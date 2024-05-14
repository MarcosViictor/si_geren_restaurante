<?php 
require_once('../app/database/classes/Cliente.php');
require_once('../app/database/DAO/ClientesDAO.php');
//Importando as minhas classes.

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    //Usando a variavel global $_server, para fazer um request post, e assim filtrar os dados do formulario.

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $senha = $_POST['senha'];
    //Filtrando os dados do formulario pelo metodo post, atribuio os valores do formulario as variaveis acima.

    if (!empty($nome) && !empty($email) && !empty($senha) && !empty($endereco) && !empty($telefone)) {
        //A função empty verifica se aquela variavel está vaziaz se essa variavéis estivrem vazias ele cria o objeto cliente.
        $cliente = new Cliente($nome, $email, $senha, $endereco, $telefone);
        $clienteDAO = new ClienteDAO();
        $clienteDAO->create($cliente);
       header('location: principal-loja.html');
       //Usando a função header para mover para o arquivo da loja.
    } else {
        header('location: cadastro.php');
        // Se não tiver nem uma informação ele não deixa passar. 
    }
}




?>
