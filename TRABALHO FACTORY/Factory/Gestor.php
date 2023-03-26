<?php

require_once 'Pessoa.php';
class Gestor extends Pessoa {
    public function getType() {
        return 'Gestor';
    }
    public function pagamento() {
        return $this->salario = 2000; 
    }
}
