<?php 		// Algumas funções
$pessoas = array();		// Cria uma array
array_push($pessoas, array(		// Joga os itens no array
	'nome'=>'Luis',
	'idade'=>21,
	'endereço'=>'Rua 1'
));
array_push($pessoas, array(
	'nome'=>'Gustavo',
	'idade'=>21,
	'endereço'=>'Rua 2'
));
print_r($pessoas[0]['endereço']);
?>