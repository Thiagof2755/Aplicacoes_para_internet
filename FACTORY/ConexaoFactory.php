<?php
interface ConexaoFactory{
    public  function instanciar($dsn,$user,$pass,$opt);
}