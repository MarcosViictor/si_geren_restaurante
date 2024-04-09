<?php 
class Funcionario extends Pessoa{
    protected $cargo;

    public function __construct($nome, $id,$cargo)
    {
       $this->nome = $nome;
       $this->id = $id;
       $this->cargo = $cargo;

    }

   
}



?>