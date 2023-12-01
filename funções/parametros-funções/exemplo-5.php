<?php

$a = 10;

//PASSAGEM DE PARAMETRO POR REFERENCIA
function trocaValor(&$b){

    $b += 50;

    return $b;
    
};

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo trocaValor($a);

//A VARIAVEL SOMA
echo $a;

?>