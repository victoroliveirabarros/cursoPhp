<?php
require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM usuarios ORDER BY id");

echo json_encode($usuarios);*/

$user = new Usuario();

$user->loadById(93);

echo $user;

?>