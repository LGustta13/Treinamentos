<?php 		// Usando os valores atribuidos anteriormente para a sessão
require_once("config.php");
session_unset();			// Limpa variáveis de sessão, mas o site te reconhece como aquela pessoa
session_destroy();			// Limpa variáveis de sessão, e destrói seu usuário do site
echo $_SESSION['nome'];
?>