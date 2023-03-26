<?php

require_once 'Pessoa.php';
class Professor extends pessoa {
    
    public function getType() {
        return 'Professor';
    }
    public function pagamento() {
        return $this->salario =1000; 
    }
}