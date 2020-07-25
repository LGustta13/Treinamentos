<?php 		// Função dentro de um parâmetro (funções anônimas)
function test($callback){
	// Processo lento
	$callback();
}
test(function(){
	echo "Terminou!";
});
 ?>