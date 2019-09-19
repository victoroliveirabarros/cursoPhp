<?php
session_id('id_da_sessao');

require_once("config.php");

session_regenerate_id();

echo session_id();

var_dump($_SESSION);
?>