<?php 
class Funcionario extends Pessoa{
    protected $desconto;
    protected $cargo;

    public function __construct($nome, $id,$cargo,$desconto)
    {
       $this->nome = $nome;
       $this->id = $id;
       $this->cargo = $cargo;
       $this->desconto = $desconto;  
    }

   
}



?>