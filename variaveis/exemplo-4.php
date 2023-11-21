<?php
//PEGAR O DADO DO ENDEREÇO URL//
$nome = (int)$_GET["a"];

var_dump($nome);


//BUSCA A PAGINA QUE ESTÁ NO SERVIDOR//
$ip = $_SERVER["SCRIPT_NAME"];

echo $ip;

?>