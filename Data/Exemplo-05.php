<?php 		// utilizando a classe DateTime
$dt = new DateTime();		// Criou uma instância da classe DateTime, ou um objeto
$periodo = new DateInterval("P15D");
echo $dt -> format("d/m/Y H:i:s");
$dt -> add($periodo);
echo "<br>";

echo $dt -> format("d/m/Y H:i:s");
?>