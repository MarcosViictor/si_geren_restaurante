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

    //Getters
    public function getId(){
        return $this->id;
    }
    
    public function getNome(){
        return $this->nome;
    }

    public function getEndereco(){
        return $this->getEndereco();
    }

    public function getContato(){
        return $this->contato;
    }

    //Setters

    
    public function setId($id){
         $this->id = $id;
    }
    
    public function setNome($nome){
         $this->nome = $nome;
    }

    public function setEndereco($endereco){
        $this->getEndereco() = $endereco;
    }

    public function setContato($contato){
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