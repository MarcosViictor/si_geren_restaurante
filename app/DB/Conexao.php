<?php

class Conexao {
    private static $conexao;

    public static function getConexao(){
        if (!self::$conexao){
            self::$conexao = new mysqli("localhost", "root", " ", "Clientes");
            if (self::$conexao->connect_error) {
                throw new Exception("Erro ao conectar ao banco de dados: " . self::$conexao->connect_error);
            }
        }
        return self::$conexao;
    }
}

Conexao::getConexao();
?>
