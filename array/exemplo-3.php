<?php

$pessoas = array();

//LANÇA MAIS UM VALOR DE ARRAY
array_push($pessoas, array(

    'nome'=>'João',
    'idade'=>20

));

array_push($pessoas, array(

    'nome'=>'Glaucio',
    'idade'=>25

));
//PRINTA O NOME DA PESSOA QUE DEU PUSH
print_r($pessoas[0]['nome']);

?>