<?php

abstract class Pagamento {
    protected $valor;
    protected $id;
    protected $pix;
    protected $debito;
    protected $credito;
        // Construtor
    public function __construct($id,$valor,$pix, $debito, $credito) {
            $this->valor = $valor;
            $this->id = $id;
            $this->pix = $pix;
            $this->debito = $debito;
            $this->credito = $credito;

    }
    
        // Getters
    public function getValor() {
            return $this->valor;
    }
    
    public function getId() {
            return $this->id;
    }
    
        // Setters
    public function setValor($valor) {
            $this->valor = $valor;
    }
    
    public function setId($id) {
            $this->id = $id;
    }

    public function getPix() {
        return $this->pix;
    }

    public function getDebito() {
        return $this->debito;
    }

    public function getCredito() {
        return $this->credito;
    }

    // Setters
    public function setPix($pix) {
        $this->pix = $pix;
    }

    public function setDebito($debito) {
        $this->debito = $debito;
    }

    public function setCredito($credito) {
        $this->credito = $credito;
    }

    

    //Metodo de pagamento Polismorfismo. Recebe o valor e subtrai com o valor por parametro da comida
    //Condicional para mostrar ao cliente o resultado da sua compra.
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