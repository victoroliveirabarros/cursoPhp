<?php
require_once("config.php");

$sql = new Sql();


$usuarios = $sql->select();

echo json_encode($usuarios);

?>