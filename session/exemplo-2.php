<?php

require_once("config.php");

//APAGA O QUE ESTÁ DENTRO DA SESSÃO
session_unset($_SESSION['nome']);

echo $_SESSION['nome'];

session_destroy();

?>