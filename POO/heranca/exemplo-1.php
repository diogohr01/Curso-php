<?php

class Documento {

    private $numero;

    public function getNumero() {

        return $this->numero;

    }

    public function setNumero($n) {

        $this->numero = $n;

    }

}

class CPF extends Documento {

    public function validar($cpf):bool {

         // Extrai somente os números
         $cpf = preg_replace('/[^0-9]/is', '', $cpf);
        
         // Verifica se foi informado todos os digitos corretamente
         if (strlen($cpf) != 11) {
             return false;
         }
         
         // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
         if (preg_match('/(\d)\1{10}/', $cpf)) {
             return false;
         }
         
         // Faz o cálculo para validar o CPF
         for ($t = 9; $t < 11; $t++) {
             for ($d = 0, $c = 0; $c < $t; $c++) {
                 $d += $cpf[$c] * (($t + 1) - $c);
             }
             $d = ((10 * $d) % 11) % 10;
             if ($cpf[$c] != $d) {
                 return false;
             }
         }
         return true;
     }

        

    }



$doc = new CPF();

$doc->setNumero("02944094084");

$resultado = ($doc->validar($doc->getNumero()));

var_dump($resultado);


?>