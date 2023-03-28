<?php

require_once 'PessoaFactory.php';
$factory = new PessoaFactory();

$Pesoa1 = $factory->criarPessoa('Thiago alves','34 97628585','Casa','Gestor');
$Pesoa1->pagamento();

echo $Pesoa1->getType() . "\n"; 
var_dump($Pesoa1);


