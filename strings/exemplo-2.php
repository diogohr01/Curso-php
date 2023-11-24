<?php

$nome = "Joao Rangel";

//strtoupper coloca o valor da variavel em maiusculo!!
$nome = strtoupper($nome);

echo $nome;
//strtoupper coloca o valor da variavel em minusculo!!

$nome = strtolower($nome);

echo "<br>";

echo $nome;

echo "<br>";
//Coloca a primeira letra do valor em MAIUSCULO
echo ucfirst($nome);

echo "<br>";
//Coloca a primeira letra de todas palavras no valor da variavel em maiusculo!
echo ucwords($nome);

?>