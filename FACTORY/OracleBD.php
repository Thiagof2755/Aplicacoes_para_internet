<?php
include "BD.php";
class OracleBD extends BD{
    public function connect(){
        $this->pdo = new PDO($this->dsn,$this->user,$this->pass,$this->opt);
    }

    public function query($sql){
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }
    
}