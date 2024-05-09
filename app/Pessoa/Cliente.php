<<<<<<< HEAD
<?php
require_once 'DB/DataHandler.php';

class Cliente extends Pessoa {
    protected $nome;
    protected $id;
    protected $endereco;
    protected $contato;

    public function __construct($nome, $id, $endereco, $contato) {
=======
<?php 

//Cliente herda de Pessoa
class Cliente extends Pessoa{
    protected $endereco;
    protected $contato;

    //Construtor para chamar por parametro os atributos.
    public function __construct($nome, $id, $endereco, $contato)
    {
>>>>>>> a7d887d1854c4fd8c422d5e5b9c6d15ece383197
        $this->nome = $nome;
        $this->id = $id;
        $this->endereco = $endereco;
        $this->contato = $contato;
    }

<<<<<<< HEAD
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
=======
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


>>>>>>> a7d887d1854c4fd8c422d5e5b9c6d15ece383197
}

class ClienteRepository {
    protected $conexao;

    public function __construct($conexao) {
        $this->conexao = $conexao;
    }

    public function salvar(Cliente $cliente) {
        $nome = $cliente->getNome();
        $id = $cliente->getId();
        $endereco = $cliente->getEndereco();
        $contato = $cliente->getContato();

        if (DataHandler::criarCliente($nome, $id, $endereco, $contato)){
            echo "Cliente salvo com sucesso.\n";
            
        } else {
            echo "Erro ao salvar Cliente.\n";
        }
        echo "Cliente salvo com sucesso.\n";
    }

}

?>
