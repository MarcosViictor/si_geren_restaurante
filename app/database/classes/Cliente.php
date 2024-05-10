<?php
require_once('Pessoa.php');


class Cliente extends Pessoa {
    protected $nome;
    protected $email;
    protected $senha;
    protected $id;
    protected $endereco;
    protected $contato;

    public function __construct($nome, $email, $senha, $endereco, $contato, $id = null) {
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;
        $this->endereco = $endereco;
        $this->contato = $contato;
        $this->id = $id;
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
    public function getEmail() {
        return $this->email;
    }

    // Setter para o email
    public function setEmail($email) {
        $this->email = $email;
    }

    // Getter para a senha
    public function getSenha() {
        return $this->senha;
    }

    // Setter para a senha
    public function setSenha($senha) {
        $this->senha = $senha;
    }

}





?>
