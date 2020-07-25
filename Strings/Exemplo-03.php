<?php 		// Substituir letras, encontrar posições, printar somente uma parte de uma frase ou palavra
// Há documentos que mostram as funções disponíveis para strings
$nome = "Luis Gustavo";

$nome = str_replace(" ", "_", $nome);		// Substituir alguma ltra por outra

echo $nome;
echo "<br>";

echo strpos($nome, "G"); 	// Pega a posição da letra
echo "<br>";

$texto = substr($nome, 0, strpos($nome, "G")); 	// Pega o texto correspondente ao intervalo
echo "$texto <br>";

$texto2 = strlen($nome);
echo "$texto2";

?>