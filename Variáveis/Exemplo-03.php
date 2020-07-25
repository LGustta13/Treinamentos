<?php
// Tipos de variáveis

//------------------------------------------------
// BÁSICO

$nome = "Luis Gustavo";			
$site = 'www.meusite.com.br';	
$ano = 1990;
$salario = 5500.99;
$bloqueado = false;

//------------------------------------------------
// COMPOSTO

$frutas = array("abacaxi","laranja","manga");
//echo $frutas[2];

$nascimento = new DateTime();		//orientação a objetos

// var_dump($nascimento);				// Tipo da variável

//------------------------------------------------
// ESPECIAL
$arquivo = fopen("Exemplo-03.php", "r");

// var_dump($arquivo);

$nulo = NULL;


?>