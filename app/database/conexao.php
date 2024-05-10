<?php

class Conexao{
    private static $instance;

    public static function getConn(){
        if(!isset(self::$instance)){
            try {
                self::$instance = new \PDO('mysql:host=localhost;dbname=restaurante', 'root', '');
                self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION); // 
            } catch (\PDOException $e) {
                echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
                exit(); // Encerra o script em caso de erro de conexão
            }
        }
        return self::$instance;
    }
}
?>
