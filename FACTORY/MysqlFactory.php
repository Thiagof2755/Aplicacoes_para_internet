<?php
include "ConexaoFactory.php";
include "MysqlBD.php";
class MysqlFactory implements ConexaoFactory{
    public  function instanciar($dsn,$user,$pass,$opt){
        if(!isset(MysqlBD::$instance)){
            MysqlBD::$instance = new MysqlBD();
            MysqlBD::$instance->dsn = $dsn;
            MysqlBD::$instance->user = $user;
            MysqlBD::$instance->pass = $pass;
            MysqlBD::$instance->opt = $opt;

        }
        return MysqlBD::$instance;
    }
}