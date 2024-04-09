<?php
//Pix herda de Pagamento
class Pix extends Pagamento {
    protected $chave_pix;

    public function __construct($valor, $id, $chave_pix) {
        $this->valor = $valor;
        $this->id = $id;
        $this->chave_pix = $chave_pix;
    }

    //Metodo que recebe o valor por parametro para pagar a comida.
    public function realizarPagamento($valor_comida) {
        return $this->Pagar($valor_comida);
    }
}

?>