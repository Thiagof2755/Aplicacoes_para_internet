<?php


// CRIAÇÃO DA CLASSE 
class DatabaseConnection
{
    private static $instance;
    private $dsn;
    private $username;
    private $password;
    private $options;
    private $pdo;


    // CONTRUTOR 
    private function __construct($dsn, $username, $password, $options)
    {
        $this->dsn = $dsn;
        $this->username = $username;
        $this->password = $password;
        $this->options = $options;
    }
      // METODO ESTATICO GETINSTANCE 
    public static function getInstance($dsn, $username, $password, $options)
    {
        if (self::$instance == null) {
            self::$instance = new self($dsn, $username, $password, $options);
        }

        return self::$instance;
    }
      

     // CONEXÃO COM O BANCO DE DADOS E USADO TRY CATCH PARA CASOS DE ERRO 
    public function connect()
    {
        try {
            $this->pdo = new PDO($this->dsn, $this->username, $this->password, $this->options);
        } catch (PDOException $e) {
            echo "Erro ao conectar com o banco de dados: " . $e->getMessage();
            die();
        }
    }
     

     // CONSULTA AO BANCO DE DADOS 
    public function query($sql)
    {
        return $this->pdo->query($sql);
    }
}

?>