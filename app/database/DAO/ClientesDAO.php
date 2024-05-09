<?php 
require_once'../conexao.php';
require_once'../sis_restaurante/si_geren_restaurante/app/Pessoa/Cliente.php';

class ClienteDAO{
    public function create(Cliente $cliente){
        $sql = 'INSERT INTO cliente (nome, endereco,contato) VALUES (?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $cliente->getNome());
        $stmt->bindValue(2, $cliente->getEndereco());
        $stmt->bindValue(3, $cliente->getContato());
        $stmt->execute();
    }

    public function read(Cliente $cliente){
        $sql = 'SELECT * FROM cliente';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() > 0){
          $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
          return $resultado;
        }else{
          return [];
        }
    }

    public function uptade(Cliente $cliente){
        $sql = 'UPTADE cliente SET nome = ?, endereco = ?, contato = ? where id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $cliente->getNome());
        $stmt->bindValue(2, $cliente->getEndereco());
        $stmt->bindValue(3, $cliente->getContato());
        $stmt->execute();
    }

    public function delete(Cliente $cliente){
        $sql = 'DELETE FROM cliente WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $cliente->getId());
        $stmt->execute();
    }
}














?>