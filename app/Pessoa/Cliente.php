<?php 

//Cliente herda de Pessoa
class Cliente extends Pessoa{
    protected $endereco;
    protected $contato;

    //Construtor para chamar por parametro os atributos.
    public function __construct($nome, $id, $endereco, $contato)
    {
        $this->nome = $nome;
        $this->id = $id;
        $this->endereco = $endereco;
        $this->contato = $contato;
    }

    //Metódo para pedir o delivery, chamando o endereço do construtor.
    public function PedirDelivery(){
       echo "Seu pedido será enviado para o " .$this->endereco;
    }

    //Metódo para cancelar o pedido.
    public function CancelarPedido(){
        echo "Pedido Cancelado! Que pena você não sabe o que está perdendo ;)";
    }


}



?>