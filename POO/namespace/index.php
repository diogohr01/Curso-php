<?php

require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@hcode.com.br");
$cad->setSenha("Diogo3711");

$cad->registrarVenda();

?>