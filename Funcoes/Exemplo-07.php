<?php 
function soma(int ...$valores){ 	// pega todos os valores como argumentos
	return array_sum($valores);
}
echo soma(2,2);
echo "<br>";
echo soma(25,33);
echo "<br>";
echo soma(2.3,2.9, 4, 5, 6);
echo "<br>";
 ?>