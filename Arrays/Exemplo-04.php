<?php 		// Codificando em JSON
$pessoas = array();		// Cria uma array
array_push($pessoas, array(		// Joga os itens no array
	'nome'=>'Luis',
	'idade'=>21,
	'endereco'=>'Rua 1'
));
array_push($pessoas, array(
	'nome'=>'Gustavo',
	'idade'=>21,
	'endereco'=>'Rua 2'
));
echo json_encode($pessoas);
?>