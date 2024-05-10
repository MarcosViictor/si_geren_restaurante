<?php 
class Funcionario extends Pessoa{
    protected $cargo;
    protected $email;
    protected $senha;

    public function __construct($nome,$email,$senha, $id,$cargo)
    {
       $this->nome = $nome;
       $this->id = $id;
       $this->cargo = $cargo;
       $this->email = $email;
       $this->senha = $senha;
    }

     //Getters   
    public function getid(){
        return $this->id;
    }

    public function getNome(){
        return $this->nome;
    }

    public function getCargo(){
        return $this->cargo;
    }

    //Setters

    
    public function setid($id){
        $this->id = $id;
    }

    public function setNome($nome){
       $this->nome = $nome;
    }

    public function setCargo($cargo){
        $this->cargo = $cargo;
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