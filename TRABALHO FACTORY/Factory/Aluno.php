<?php

require_once 'Pessoa.php';
class Aluno extends pessoa {
    public function getType() {
        return 'Aluno';
    }
    public function pagamento() {
        return $this->salario = 0; 
    }
}


