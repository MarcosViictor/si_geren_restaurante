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

    public function DarDesconto($desconto){
            if($desconto === 5){
                $valor_desconto = $desconto * 0.05;
                $total = $valor_desconto;
                return $total;
            } elseif($desconto === 10){
                $valor_desconto = $desconto * 0.1;
                $total = $valor_desconto;
                return $total;
            } else {
                throw new Exception("Nenhum desconto encontrado!");
            }
    }

    public function FormaPagamento(){

    }


    public function EnviarPedido(){
        
    }




}



?>