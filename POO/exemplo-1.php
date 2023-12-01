<?php

class Pessoa {

    public $nome;//Atributo

    public function falar() {//Método
//$this->nome -- busca a variavel
        return "O meu nome é ".$this->nome;
    
    }

}

$marcus = new Pessoa();
$marcus->nome = "Marcus Ribeiro";
echo $marcus->falar();

?>