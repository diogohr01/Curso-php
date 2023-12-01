<?php

function ola(){
//func_get_args() = OS PARAMETROS PASSADOS SE TORNAM DENTRO DE UM ARRAY
    $argumentos = func_get_args();

    return $argumentos;
    
};

var_dump(ola("Bom dia!"));

?>