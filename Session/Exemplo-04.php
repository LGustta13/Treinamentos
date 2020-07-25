<?php 		// Gerando outros valores para o ID
session_id('m6e3hokv4dg7qimf1sq55m2jfa');
require_once("config.php");
session_regenerate_id();
echo session_id();
var_dump($_SESSION);
?>