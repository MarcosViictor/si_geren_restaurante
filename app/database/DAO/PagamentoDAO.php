<?php 
require_once'../sis_restaurante/si_geren_restaurante/app/conexao.php';
require_once'../sis_restaurante/si_geren_restaurante/app/Pagamento/Pagamento.php';

class PagamentoDAO{
    public function create(Pagamento $pagamento){
        $sql = 'INSERT INTO pagamento (pix, credito, debito) VALUES (?,?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt -> bindValue(1,$pagamento->getPix());
        $stmt -> bindValue(2, $pagamento->getCredito());
        $stmt -> bindValue(3, $pagamento->getDebito());

        $stmt -> execute();
    }

    public function read(Pagamento $pagamento){
        $sql = 'SELECT * FROM pagamento';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() > 0){
          $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
          return $resultado;
        }else{
          return [];
        }
    }

    public function uptade(Pagamento $pagamento){
        $sql = 'UPTADE pagamento SET pix = ?, credito = ?, debito = ? WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt -> bindValue(1,$pagamento->getPix());
        $stmt -> bindValue(2, $pagamento->getCredito());
        $stmt -> bindValue(3, $pagamento->getDebito());

        $stmt -> execute();
    }

    public function delete(Pagamento $pagamento){
        $sql = 'DELETE FROM pagamento WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $pagamento->getId());
        $stmt->execute();
    }
}



?>