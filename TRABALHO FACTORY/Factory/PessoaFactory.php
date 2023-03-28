<?php

require_once 'Professor.php';
require_once 'Aluno.php';
require_once 'Gestor.php';
class PessoaFactory {

    public function criarPessoa($nome,$telefone,$endereco, $type) {
        switch($type) {
            case 'Aluno':
                return new \Aluno($nome,$telefone,$endereco );
            case 'Professor':
                return new \Professor($nome,$telefone,$endereco);
            case 'Gestor':
                return new \Gestor($nome,$telefone,$endereco);
            default:
               echo 'Tipo Invalido';
               exit();
        }
    }
}
