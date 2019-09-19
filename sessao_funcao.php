<?php
require_once("config.php");

//echo session_save_path(); 

var_dump(session_status());

switch(session_status()){
    case PHP_SESSION_DISABLED:
    echo "Sessões desabilitadas";
    break;

    case PHP_SESSION_NONE:
    echo "Sessão habilitada, porém não existentes";
    break;

    case PHP_SESSION_ACTIVE:
    echo "Sessões habilitadas e uma sessão existe";
    break;
}

?>