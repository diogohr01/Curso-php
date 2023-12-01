<?php
//Para buscar o json no site busque com o CTRL + U
$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Glaucio","idade":25}]';
//TRANSORMA O JSON PARA ARRAY
$data = json_decode($json, true);

var_dump($data);

?>