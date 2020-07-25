<form>			 <!-- Criação de um formulário -->
	
	<input type="text" name="nome">
	<input type="date" name="nascimento">
	<input type="submit" name="OK">

</form>>

<?php  		// Utlizando o GET para pegar informações de um formulário
	if (isset($_GET)) {			// Evitar problemas com a variável GET
		foreach ($_GET as $key => $value) {
		echo "Nome do campo: ".$key."<br>";		// A key é o name
		echo "Valor do campo: ". $value."<br>";	// value é o que digitou
		echo "<hr>";
	}
}
// http://localhost/Treinamento/Repeti%C3%A7%C3%A3o/Exemplo-04.php?nome=Luis+Gustavo&nascimento=2020-06-29&OK=Enviar	
?>