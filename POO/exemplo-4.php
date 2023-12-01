<?php

class Endereco {

    private $logradouro;
    private $numero;
    private $cidade;

    //METODO MÁGICO
    public function __construct($a, $b, $c) {

        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;

    }

    public function __destruct(){

        //var_dump("DESTRUIR");

    }

    //CONVERTE A ARRAY PARA STRING E PODE DAI FAZER O ECHO
    public function __toString(){

        return $this->logradouro.", ".$this->numero." - ".$this->cidade;

    }

}

$meuEndereco = new Endereco("Rua Nossa Senhora de Guadalupe", "260", "São Bernardo");
/*
var_dump($meuEndereco);

unset($meuEndereco);
*/

echo $meuEndereco;

?>