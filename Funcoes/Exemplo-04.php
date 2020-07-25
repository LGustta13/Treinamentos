<?php 
function ola(){
	$argumentos = func_get_args();		// Recupera todos os argumentos passados
	return $argumentos;
}
var_dump(ola("Bom dia", 10));		// Dependendo da quanti de argum a função trabalha de certa forma
 ?>