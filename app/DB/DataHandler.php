<?php
require_once 'Conexao.php';

class DataHandler {
    protected static $conexao;

    public static function criarCliente($nome, $endereco, $contato) {
        self::$conexao = Conexao::getConexao(); // Inicializa a conexão
        $id = uniqid();
        $stmt = self::$conexao->prepare("INSERT INTO clientedopao (nome, id, endereco, contato) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nome, $id, $endereco, $contato);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public static function listaDeCliente() {
        self::$conexao = Conexao::getConexao();

        $result = self::$conexao->query("SELECT * FROM Clientes");

        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return [];
        }
    }
    // Outros métodos CRUD aqui... Delete, update...
}
?>
