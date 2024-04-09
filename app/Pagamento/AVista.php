<?php

class Avista extends Pagamento {
    public function __construct($valor, $id) {
        $this->valor = $valor;
        $this->id = $id;
    }

    public function realizarPagamento($valor_comida) {
        return $this->Pagar($valor_comida);
    }
}

?>