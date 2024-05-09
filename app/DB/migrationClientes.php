<?php

require_once 'Conexao.php';

class MigrationClientes {
    protected $conexao;

    public function __construct() {
        $this->conexao = Conexao::getConexao();
    }

    public function migration() {
        $sql = "CREATE TABLE IF NOT EXISTS clientedopao (
            nome VARCHAR(255) NOT NULL,
            id VARCHAR(255) PRIMARY KEY,
            endereco VARCHAR(255) NOT NULL,
            contato VARCHAR(255) NOT NULL
        )";

        if ($this->conexao->query($sql) === TRUE) {
            echo "Tabela Clientes criada com sucesso!.\n";
        } else {
            echo "Erro na criação da tabela: " . $this->conexao->error;
        }
    }
}


$migrationClientes = new MigrationClientes();

$migrationClientes->migration();
?>
