<?php 	// Utilizando o include, para chamar scrips diferentes

include "Exemplo-01.php";	// Já está na mesma pasta, pode chamar também arquivos de outras pastas ../inc/A.php
// include -> Chama um arquivo, não obriga que o arquivo exista, ele pode pegar algum arquivo de um path no servidor de desenvolvimento. Permite criar um repositório para chamar funções diversas.

$resultado = somar(10, 20);
echo $resultado;

?>