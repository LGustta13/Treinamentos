<?php 			// Utilizando o for
// Atencionar ao fato que um for pode derrubar um servidor! Pois exige-se muito da memória do servidor, caso não sair do laço de repetição
for ($i=0; $i<=1000; $i+=5) {

	if ($i>=200 && $i<=800) continue;	// Volta para o laço, não passa pelo echo
	if ($i === 900) break;				// Termina o laço

	echo "$i <br>";		// echo $i."<br>"
}
?>