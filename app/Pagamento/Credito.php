<?php

class Credito extends Pagamento {
    protected $vr_credito;

    public function __construct($valor, $id, $vr_credito) {
        $this->valor = $valor;
        $this->id = $id;
        $this->vr_credito = $vr_credito;
    }

    public function realizarPagamento($valor_comida) {
        return $this->Pagar($valor_comida);
    }
}

?>