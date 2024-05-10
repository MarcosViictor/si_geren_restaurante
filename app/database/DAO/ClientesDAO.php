<?php 
require_once(__DIR__ . '/../conexao.php');
require_once(__DIR__ . '/../classes/Cliente.php');


class ClienteDAO {
    public function create(Cliente $cliente) {
        $sql = 'INSERT INTO cliente (nome,email,senha, endereco, contato) VALUES (?, ?, ?, ? , ?)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $cliente->getNome());
        $stmt->bindValue(2, $cliente->getEmail());
        $stmt->bindValue(3, $cliente->getSenha());
        $stmt->bindValue(4, $cliente->getEndereco());
        $stmt->bindValue(5, $cliente->getContato());
        $stmt->execute();
    }

    public function read(Cliente $cliente) {
        $sql = 'SELECT * FROM cliente';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }
    }

    public function update(Cliente $cliente) { // Corrigido o nome do método para "update"
        $sql = 'UPDATE cliente SET nome = ?,email =?, senha = ?, endereco = ?, contato = ? WHERE id = ?'; // Corrigido o comando SQL para "UPDATE"
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $cliente->getNome());
        $stmt->bindValue(2, $cliente->getEmail());
        $stmt->bindValue(3, $cliente->getSenha());
        $stmt->bindValue(4, $cliente->getEndereco());
        $stmt->bindValue(5, $cliente->getContato());
        $stmt->bindValue(6, $cliente->getId()); // Adicionado o valor para o parâmetro id
        $stmt->execute();
    }

    public function delete(Cliente $cliente) {
        $sql = 'DELETE FROM cliente WHERE id = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $cliente->getId());
        $stmt->execute();
    }

    public function autenticar($email, $senha) {
        $sql = 'SELECT * FROM cliente WHERE email = ? AND senha = ?';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1, $email);
        $stmt->bindValue(2, $senha);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    }
    
}
?>
