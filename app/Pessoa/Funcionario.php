<?php 
class Funcionario extends Pessoa{
    protected $cargo;

    public function __construct($nome, $id,$cargo)
    {
       $this->nome = $nome;
       $this->id = $id;
       $this->cargo = $cargo;

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
   
}



?>