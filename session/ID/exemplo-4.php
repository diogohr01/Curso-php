<?php
//session _id busca o eu id dessa sessão e pode ser manipulada, esse id muda toda vez que entra no site
session_id('ofkncku49jq860tn0et5utgnkl');

require_once("config.php");
//REGENERA UMA NOVA ID NA SESSÃO
session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>