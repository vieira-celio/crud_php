<?php
/*
aqui faz a conexão com o banco e tabela
*/
    class Banco{
        private $host ='localhost';
        private $dbname ='crud_php';
        private $username ='root';
        private $password ='';
        private $conexao;

        public function __construct(){
            $this->conexao = new PDO("mysql:host=".$this->host.";dbname=". $this->dbname,  $this->username, $this->password);
        }

        public function getConexao(){
            return $this->conexao;
        }
    }
?>
