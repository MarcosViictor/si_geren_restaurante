<?php 
require_once'../conexao.php';
require_once'../sis_restaurante/si_geren_restaurante/app/Pessoa/Funcionario.php';

class FuncionarioDAO{

    public function create(Funcionario $funcionario){
        $sql = 'INSERT INTO funcionario (nome, cargo) VALUES (?,?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt -> bindValue(1,$funcionario->getNome());
        $stmt -> bindValue(2, $funcionario->getCargo());
        $stmt ->execute();
    }

    public function read(Funcionario $funcionario){
        $sql = 'SELECT * FROM funcionario';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        if($stmt->rowCount() > 0){
          $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
          return $resultado;
        }else{
          return [];
        }
    }

    public function uptade(Funcionario $funcionario){
        $sql = 'UPTATE funcionario SET nome = ?, funcionario = ? WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt -> bindValue(1,$funcionario->getNome());
        $stmt -> bindValue(2, $funcionario->getCargo());
        $stmt ->execute();
    }

    public function delete(Funcionario $funcionario){
        $sql = 'DELETE FROM funcionario WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $funcionario->getId());
        $stmt->execute();
    }
}

?>