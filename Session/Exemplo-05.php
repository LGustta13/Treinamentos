<?php 		// Funções para session
require_once("config.php");
echo session_save_path();
echo "<br>";
var_dump(session_status());
echo "<br>";

switch(session_status()){
	case PHP_SESSION_DISABLED:
	echo "sessões desabilitadas";
	break;

	case PHP_SESSION_NONE:
	echo "sessões habilitadas, mas não iniciadas";
	break;

	case PHP_SESSION_ACTIVE:
	echo "sessões habilitadas, e uma existir";
	break;
};
?>