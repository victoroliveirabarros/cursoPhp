<?php
require_once("config.php");

/*$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM usuarios ORDER BY id");

echo json_encode($usuarios);*/

/*$user = new Usuario();

$user->loadById(93);*/
//echo $user;

//Carrega uma lista de usuários
/*$lista = Usuario::getLista();

echo json_encode($lista);*/

//Carrega uma lista de usuarios buscando pelo login
/*$search = Usuario::search("vi");

echo json_encode($search);*/

//carrega um usuario usando o login e a senha
$usuario = new Usuario();
$usuario->login("user", "senha");

echo $usuario;







?>