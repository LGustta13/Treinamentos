<?php 		// Define o padrão de data local
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
echo ucwords(strftime("%A %B"))."<br>";
echo date("d/m/Y H:i:s");
 ?>