<?php

//REQUIRE = O ARQUIVO EXISTA E ESTEJA FUNCIONANDO 

//INCLUDE = O ARQUIVO MESMO QUE NÃO ESTEJA FUNCIONANDO ELE SEGUE O CODIGO


include_once "inc/exemplo-1.php";
//require_once "inc/exemplo-1.php";

$resultado = somar(10, 25);

echo $resultado;

?>