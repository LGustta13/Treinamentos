<?php    // Operadores do PHP - Spaceship e SpaceNULL

$a = 50;
$b = 35;

var_dump($a <=> $b);	// Retorna 1 (a maior), 0 (a igual) ou -1 (a menor), spaceship

$c = NULL;
$d = NULL;
$e = 10;

echo $c ?? $d ?? $e 	// Ignora as variáveis nulas até chegar em uma existente

?>