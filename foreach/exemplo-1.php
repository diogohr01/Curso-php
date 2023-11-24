<?php

$meses = array(

    "Janeiro", "Fevereiro", "Março",
    "Abril", "Maio", "Junho",
    "Julho", "Agosto", "Setembro",
    "Outubro", "Novembro", "Dezembro"

);

foreach ($meses as $index => $mes) {

    echo "Indice: ".$index."<br>";
    echo "O mês é: ".$mes."<br><br>";

}


?>
<?php

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