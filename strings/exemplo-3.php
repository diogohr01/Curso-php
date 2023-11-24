<?php

$empresa = "Hcode";
//str_replace muda o valor de uma variavel ("a letra que deseja mudar", "passar a letra que queira mudar", variavel que vai ser mudada)
$empresa = str_replace("o", "0", $empresa);

$empresa = str_replace("e", "3", $empresa);

echo $empresa;

?>