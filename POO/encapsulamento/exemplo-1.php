<?php

class Pessoa {

    public $nome = "Rasmus";
    protected $idade = 48;
    private $senha = "12345";


    //Com a função tu consegue buscar os atributos que estão encapsulados
    public function verDados(){

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";

    }

}

$objeto = new Pessoa();

//echo $objeto->nome . "<br/>";

$objeto->verDados();

?>