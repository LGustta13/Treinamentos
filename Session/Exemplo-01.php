<?php 		// Atribui valor para a sessão
// Session, usa quando quer manter o usuário no site que usa autenticação
require_once("config.php");
$_SESSION["nome"] = "Luis_Gustavo";			// Array super global
print_r("Sessão iniciada");
?>