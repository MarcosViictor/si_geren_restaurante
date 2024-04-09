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

    public function PedirDelivery(){
       echo "Seu pedido será enviado para o " .$this->endereco;
    }

    public function CancelarPedido(){
        echo "Pedido Cancelado! Que pena você não sabe o que está perdendo ;)";
    }


}



?>