<?php 		// Exemplo do uso do & comercial
$pessoa = array(
	'nome' => 'Gustavo',
	'idade'=> 21 
);
foreach ($pessoa as &$key) {
	if(gettype($key) === 'integer') $key +=10;
	echo $key.'<br>';
}

print_r($pessoa)


 ?>