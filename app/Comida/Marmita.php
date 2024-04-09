<?php

echo "Bem vindo ao Restaurante\n ";

    class Marmita {
      
       public $nome;
        public $itens;
        public $preco;
      
     public function __construct($nome, $itens, $preco) {
          $this->nome = $nome;
          $this->itens = $itens;
          $this->preco = $preco;
      }

      public function mostrarCardapio() {
          echo "Marmita {$this->nome}: " . implode(", ", $this->itens) . ". R$ {$this->preco}\n";
      }
  }

?>