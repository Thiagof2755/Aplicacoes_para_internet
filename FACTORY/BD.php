<?php
abstract class BD{
    public static $instance;
    public $dsn;
    public $user;
    public $pass;
    public $opt;
    public $pdo;

    public abstract function  connect();
    public abstract function query($sql);
}