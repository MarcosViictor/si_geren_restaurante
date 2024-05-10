<?php 
require_once'../sis_restaurante/si_geren_restaurante/app/conexao.php';
require_once'../sis_restaurante/si_geren_restaurante/app/Comida/Marmita.php';


class MarmitaDAO{

    public function create(Marmita $marmita){
        $sql = 'INSERT INTO marmita (nome, preco, descricao) VALUES (?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt -> bindValue(1,$marmita->getNome());
        $stmt -> bindValue(2, $marmita->getPreco());
        $stmt -> bindValue(3, $marmita->getDescricao());

        $stmt -> execute();

    }

    public function read(Marmita $marmita){
        $sql = 'SELECT * FROM marmita';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() > 0){
          $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
          return $resultado;
        }else{
          return [];
        }
    }

    public function uptade(Marmita $marmita){
        $sql = 'UPTADE marmita SET nome = ?, preco = ?, descricao = ? WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt -> bindValue(1,$marmita->getNome());
        $stmt -> bindValue(2, $marmita->getPreco());
        $stmt -> bindValue(3, $marmita->getDescricao());


        $stmt -> execute();
    }

    public function delete(Marmita $marmita){
        $sql = 'DELETE FROM marmita WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $marmita->getId());
        $stmt->execute();
    }


}






?>