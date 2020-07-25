<?php 		// decodificando JSON (pega o json pelo código fonte da página)
$json = '[{"nome":"Luis","idade":21,"endereco":"Rua 1"},{"nome":"Gustavo","idade":21,"endereco":"Rua 2"}]';
$data = json_decode($json, true);	// Sem o true vira objeto(ñ array)
var_dump($data);
?>