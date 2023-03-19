<?php
include "BD.php";
class MysqlBD extends BD{
    public function connect(){
        $this->pdo = new mysqli($this->dsn,$this->user,$this->pass,$this->opt);
    }

    public function query($sql){
        $stmt = $this->pdo->query($sql);
        return $stmt->fetchAll();
    }
    
}