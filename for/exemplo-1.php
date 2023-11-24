<?php

for ($i = 0; $i < 1000; $i+= 5) {
    //tirar os valores de 200 até 800
    if ($i >= 200 && $i <= 800) continue;
//chegar em 900 para
    if ($i === 900) break;

    echo $i . "<br>";

}

$meses = array(
    "Janeiro" => 31,
    "Fevereiro" => 28,
    "Março" => 31,
    "Abril" => 30,
    "Maio" => 31,
    "Junho" => 30,
    "Julho" => 31,
    "Agosto" => 31,
    "Setembro" => 30,
    "Outubro" => 31,
    "Novembro" => 30,
    "Dezembro" => 31
);

// Loop pelos meses e exibe os dias de cada mês
foreach ($meses as $mes => $dias) {
    echo "Dias de $mes: ";
    for ($i = 1; $i <= $dias; $i++) {
        echo "$i ";
    }
    echo "</br>";
}
?>