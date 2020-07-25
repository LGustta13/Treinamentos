<?php 			// Utilizando do while

$total = 120;
$desconto = 0.9;

do {
	$total *= $desconto;
	echo "Valor: ".$total."<br>";
} while ( $total > 100);

?>