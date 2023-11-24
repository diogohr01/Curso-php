<?php

$nome = "Glaucio";

//ESCOPO {} DENTRO DA FUNÇÃO NADA FUNCIONA DE FORA DELE
function teste() {
//USE O GLOBAL PARA BUSCAR VARIAVEIS DE FORA DA FUNÇÃO
    global $nome;
    echo $nome;

}

function teste2() {

    $nome = "João";

    echo $nome." agora no teste2";

}

teste();echo " ";teste2();


?>