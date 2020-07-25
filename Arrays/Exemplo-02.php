<?php 		// Array bidimensional
$carros[0][0] = "GM";		// Cada coluna é um array
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sports";

print_r($carros);
echo "<br>";
print_r(end($carros[1]));	// Printa Eco Sports
?>