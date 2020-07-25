<?php 		// chamada de argumentos por referência (ponteiros)
$a = 10;
function trocaValor(&$b){	// O que acontece na função ñ altera a variavel
	$b += 50;				// passagem por referência
	return $b;
}
echo trocaValor($a);
echo "<br>";
echo $a;
 ?>