<?php
//Pix herda de Pagamento
class Pix extends Pagamento {
    protected $chave_pix;

    public function __construct($valor, $id, $chave_pix) {
        $this->valor = $valor;
        $this->id = $id;
        $this->chave_pix = $chave_pix;
    }

    //Getters

    public function getId(){
        return $this->id;
    }

    public function getValor(){
        return $this->valor;
    }

    public function getChavepix(){
        return $this->getChevepix;
    }

    //Setters
    
    public function setId($id){
        $this->id = $id;
    }

    public function setValor($valor){
        $this->valor =$valor;
    }

    public function setChavepix($chave_pix){
        $this->getChevepix = $chave_pix;
    }


    //Metodo que recebe o valor por parametro para pagar a comida.
    public function realizarPagamento($valor_comida) {
        return $this->Pagar($valor_comida);
    }
}

?>