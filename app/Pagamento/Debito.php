<?php

class Debito extends Pagamento {
    protected $vr_debito;

    public function  __construct($valor, $id, $vr_debito) {
        $this->valor = $valor;
        $this->id = $id;
        $this->vr_debito = $vr_debito;
    }

    public function realizarPagamento($valor_comida) {
        return $this->Pagar($valor_comida);
    }
}

?>