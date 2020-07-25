<?php // Escopo de Variável

$nome = "Gustavo";

function teste()
{
	global $nome; // nome na função e da variável são a mesma coisa, sendo desnecessário colocar parâmetros.
	echo $nome;
}

function teste2()
{
	$nome = "Luis";
	echo $nome." agora no teste2";
}

teste($nome);
echo "<br/>";
teste2($nome);

?>