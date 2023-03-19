<?php
class DBSingleton {
    private static $instace;
    private $dsn;
    private $user;
    private $pass;
    private $opt;
    private $pdo;

    private function __construct($dsn,$user,$pass,$opt)
    {
        $this->dsn = $dsn;
        $this->user = $user;
        $this->pass = $pass;
        $this->$opt = $opt;
    }

    public static function getInstance($dsn,$user,$pass,$opt){
        if(!isset(self::$instace)){
            self::$instace = new DBSingleton($dsn,$user,$pass,$opt);
        }
        return self::$instace;
    }

    public function connect(){
        $this->pdo = new PDO($this->dsn,$this->user,$this->pass,$this->opt);
    }

    public function query($sql){
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }
}
?>