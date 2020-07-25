<?php

// Variáveis pré-definidas
// $_GET -> array super global, usada em formulários

$nome = (int)$_GET["b"];
var_dump($nome);

$ip = $_SERVER["REMOTE_ADDR"];
$ip = $_SERVER["SCRIPT_NAME"];

?>