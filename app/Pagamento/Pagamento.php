<?php

abstract class Pagamento {
    protected $valor;
    protected $id;

    protected function Pagar($valor_comida) {
        $total = $this->valor - $valor_comida;
        if ($valor_comida === $this->valor) {
            echo "Obrigado pela Compra, volte sempre!!";
        } elseif ($total > 0) {
            echo "O seu troco é de R$: " . $total . "\n ,Volte sempre!";
        } elseif ($total < 0) {
            echo "Valor insuficiente!";
        }
    }
}

?>