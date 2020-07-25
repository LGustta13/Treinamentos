<?php 		// Operadores matemáticos

$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;		// variável booleana
$resultado2 = (10 + 3) / 2;							// variável float

echo $resultado."<br>";	// Em contas, deve usar echo
var_dump($resultado);	// Em comparação, deve usar vardump

echo "<br>";

$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;
var_dump($resultado);

?>