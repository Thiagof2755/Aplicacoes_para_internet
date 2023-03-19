<?php
include "ConexaoFactory.php";
include "OracleBD.php";
class OracleFactory implements ConexaoFactory{
    public  function instanciar($dsn,$user,$pass,$opt){
        if(!isset(OracleBD::$instance)){
            OracleBD::$instance = new OracleBD();
            OracleBD::$instance->dsn = $dsn;
            OracleBD::$instance->user = $user;
            OracleBD::$instance->pass = $pass;
            OracleBD::$instance->opt = $opt;

        }
        return OracleBD::$instance;
    }
}