<?php

$nome = "Hcode";
$site = "www.hcode.com.br";

$ano = 1990;
$salario = 5500.99;

echo "O ". $nome ." recebe um salário de ". $salario ." desde ".$ano;

// 0 = FALSE e 1 = TRUE //
$bloqueado = false;


/////////////////////////////////////////////
$frutas = array("abacaxi", "laranja", "manga");

// ARRAY SEMPRE COMEÇA DO ZERO //
$carros = array("volvo", "mercedes", "fiat");

echo $carros[0];
echo "  ";
echo $frutas[2];

$nascimento = new DateTime();

//var_dump($nascimento);
/////////////////////////////////////////////

//VAI LER O ARQUIVO //
$arquivo = fopen("exemplo-3.php", "r");

var_dump($arquivo);

//AUSENCIA DE VALOR É O NULL//
$nulo = NULL;

//ELA ESTÁ VAZIA MAS JÁ RESERVOU O ESPAÇO NA MEMORIA//
$vazio = "";

?>