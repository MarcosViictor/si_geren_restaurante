<?php

class Credito extends Pagamento {
    protected $vr_credito;

    public function __construct($valor, $id, $vr_credito) {
        $this->valor = $valor;
        $this->id = $id;
        $this->vr_credito = $vr_credito;
    }
        //Getters

        public function getId(){
            return $this->id;
        }
    
        public function getValor(){
            return $this->valor;
        }
    
        public function getVrcredito(){
            return $this->vr_credito;
        }
    
        //Setters
        
        public function setId($id){
            $this->id = $id;
        }
    
        public function setValor($valor){
            $this->valor =$valor;
        }
    
        public function setVrcredito($vr_credito){
            $this->vr_credito = $vr_credito;
        }
    

    public function realizarPagamento($valor_comida) {
        return $this->Pagar($valor_comida);
    }
}

?>