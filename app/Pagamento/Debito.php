<?php

class Debito extends Pagamento {
    protected $vr_debito;

    public function  __construct($valor, $id, $vr_debito) {
        $this->valor = $valor;
        $this->id = $id;
        $this->vr_debito = $vr_debito;
    }

    //Getters

    public function getId(){
        return $this->id;
    }

    public function getValor(){
        return $this->valor;
    }

    public function getVrdebito(){
        return $this->getVrdebito;
    }

    //Setters
    
    public function setId($id){
        $this->id = $id;
    }

    public function setValor($valor){
        $this->valor =$valor;
    }

    public function setVrdebito($vr_debito){
        $this->getVrdebito = $vr_debito;
    }


    public function realizarPagamento($valor_comida) {
        return $this->Pagar($valor_comida);
    }
}

?>