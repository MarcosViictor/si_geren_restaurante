<?php
require_once 'DB/DataHandler.php';

class Cliente extends Pessoa {
    protected $nome;
    protected $id;
    protected $endereco;
    protected $contato;

    public function __construct($nome, $id, $endereco, $contato) {
        $this->nome = $nome;
        $this->id = $id;
        $this->endereco = $endereco;
        $this->contato = $contato;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getId() {
        return $this->id;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    public function getContato() {
        return $this->contato;
    }
}

class ClienteRepository {
    protected $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function salvar(Cliente $cliente) {
        $nome = $cliente->getNome();
        $id = $cliente->getId();
        $endereco = $cliente->getEndereco();
        $contato = $cliente->getContato();

        if (DataHandler::criarCliente($nome, $id, $endereco, $contato)){
            echo "Cliente salvo com sucesso.\n";
            
        } else {
            echo "Erro ao salvar Cliente.\n";
        }
        echo "Cliente salvo com sucesso.\n";
    }

}

?>
