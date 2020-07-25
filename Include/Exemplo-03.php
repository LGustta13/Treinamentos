<?php  		// require e require_once

require_once "Exemplo-01.php";
require_once "Exemplo-01.php";

// require -> Obriga que o arquivo exista para que ele rode perfeitamente

//require_once -> Chama o arquivo e evita que ocorra laços de repetição de outras funções. Somente o arquivo que o diretório chama que roda, uma vez. Melhor opção!

$resultado = somar(10, 20);
echo $resultado;

?>