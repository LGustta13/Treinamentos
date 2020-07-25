<?php 			// Utilizando while

$condicao = true;

while ($condicao) {
	$numero = rand(1,10);		// Gera números aleatórios
	echo "$numero <br>";
	if ($numero === 3) {
		$condicao = false;
	}
}

?>