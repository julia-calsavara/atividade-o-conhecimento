<?php
class Database {
    private $pdo;
    private $host;
    private $db;
    private $user;
    private $pass;
   
//define as configurações do banco de dados
    public function __construct($host, $db, $user, $pass, $port = 3307) {
        $this->host = $host;
        $this->db = $db;
        $this->user = $user;
         $this->pass = $pass;
        $this->port = $port; 
    }
    //conectar ao banco de dados
    public function connect() {
        try {
            //cria uma nova instância de PDO para MySQL
            $this->pdo = new PDO("mysql:host={$this->host};port={$this->port};dbname={$this->db};charset=utf8", $this->user, $this->pass);
            
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Define o modo de erro do PDO para exceções
            echo "Conexão com o banco de dados MySQL realizada com sucesso!<br>";
        } catch (PDOException $e) {
            
            echo "Erro ao conectar ao banco de dados: " . $e->getMessage() . "<br>";
        }
    }
        public function getConnection(){
            return $this->pdo;
            //permite que outros sites se conectem ao banco de dados 
        }
    }

//Fim da etapa 1: 01/10/2024 às 09:12
?>