<?php

$dt = new DateTime();
//PUXAR AS DATAS E HORAS PARA UM INTERVALO DE DIAS QUE DESEJA COLOCAR COMO PARAMETRO
$periodo = new DateInterval("P15D");

echo $dt->format("d/m/Y H:i:s");

$dt->add($periodo);

echo "<br>";

echo $dt->format("d/m/Y H:i:s");

?>