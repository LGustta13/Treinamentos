<?php 		// Chamada de parâmetros
function ola($texto = "mundo", $periodo = "Bom dia"){		// parâmetros com valor padrão
	return "Olá $texto! $periodo!<br>";
}
echo ola();			// Lembrar sempre de observar a ordem dos parâmetros
echo ola("", "Boa noite");
echo ola("Luis", "Boa tarde");
echo ola("Gustavo", "");
 ?>