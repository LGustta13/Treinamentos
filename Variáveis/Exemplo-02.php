<?php

$anoNascimento = 1990;				// Ano de nascimento

$nomeInicial = "Luis Gustavo";		// Meu nome

$sobrenome = "Oliveira";

// $1nome = "Maria";  				//Declaração está errada!!

// $this  							// Variável já reservada

echo $nomeInicial;
echo "<br/>";		// quebra de linha

// unset($nome1, $nome2, $nome3, ...); // apagar variável da memória

if(isset($nome1))		// Se a variável existe
{
	echo $nomeInicial;
}

$nomeCompleto = $nomeInicial." ". $sobrenome;		// Concatenação

echo "<br/>";

echo $nomeCompleto;

exit;				// Finaliza o código aqui





?>