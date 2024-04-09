<?php 
class Cliente extends Pessoa{
    protected $endereco;
    protected $contato;

    public function __construct($nome, $id, $endereco, $contato)
    {
        $this->nome = $nome;
        $this->id = $id;
        $this->endereco = $endereco;
        $this->contato = $contato;
    }

    public function FazerPedido(){

    }

    public function CancelarPedido(){
        
    }


    



}



?>