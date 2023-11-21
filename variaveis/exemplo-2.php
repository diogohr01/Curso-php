<?php

/*
$anoNascimento = 1999;

$nomeCompleto = "";*/
//Na linha de baixo temos uma variável com númerono nome

$nome1 = "João";

$sobrenome = "Rangel";

$nomeCompleto = $nome1 . " " . $sobrenome;

var_dump($nomeCompleto);

echo " ";

// O UNSET LIMPA A VARIAVEL DEIXA ELA COMO NULL //
unset($nomeCompleto); 

$nome1 = "Diogo";

$sobrenome = "Rodrigues";

$nomeCompleto = $nome1 . " " . $sobrenome;

//O isset ELE VERIFICA SE A VARIAVEL TEM DADO //
if (isset($nomeCompleto)) {

    var_dump($nomeCompleto);

}

?>