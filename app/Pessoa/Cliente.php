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

      // Setters
      public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function setContato($contato) {
        $this->contato = $contato;
    }
}





?>
