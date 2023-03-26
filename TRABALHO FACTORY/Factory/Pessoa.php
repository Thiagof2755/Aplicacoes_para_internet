<?php

abstract class Pessoa {
    public $nome;
    public $telefone;
    public $endereco;
    public $salario;
    
    public function __construct($nome,$telefone,$endereco) {
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->endereco = $endereco;
        
    }
    public function pagamento() {
        return 0; 
    }
    abstract public function getType();
}