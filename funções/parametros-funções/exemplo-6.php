<?php

$pessoa = array(

    'nome'=>'Marcus',

    'idade'=>19
    
);

foreach ($pessoa as &$value) {
//gettype - pega o tipo da variavel
    if (gettype($value) === 'integer') $value += 10;
    
    echo $value.'<br>';

}
print_r($pessoa);

?>