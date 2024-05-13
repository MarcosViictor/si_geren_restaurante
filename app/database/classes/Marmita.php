<?php



    class Marmita {
        protected $id;
        protected $nome;
        protected $itens;
        protected $preco;
        protected $descricao;
      
     public function __construct($nome, $descricao, $preco) {
          $this->nome = $nome;
          $this->descricao = $descricao;
          $this->preco = $preco;
      }

      // Getters
      public function getId(){
        return $this->id;
      }

      public function getNome(){
        return $this->nome;
      }

      public function getDescricao(){
        return $this->descricao;
      }

      public function getPreco(){
        return $this->preco;
      }

      //Setters
      public function setId($id){
        $this->id = $id;
      }

      public function setNome($nome){
        $this->nome = $nome;
      }

      public function setDescricao($descricao){
        $this->descricao = $descricao;
      }

      public function setPreco($preco){
        $this->preco = $preco;
      }

      public function mostrarCardapio() {
          echo "Marmita {$this->nome}: " . implode(", ", $this->itens) . ". R$ {$this->preco}<br>";
      }
  }

?>