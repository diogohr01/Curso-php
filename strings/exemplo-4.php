<?php

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";
//srtpos busca a palavra que está na segundo valor
$q = strpos($frase, $palavra);

$texto = substr($frase, 0, $q);

var_dump($texto);
//strlen = soma o length do valor da variavel dentro dele
$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br>";

var_dump($texto2);

?>