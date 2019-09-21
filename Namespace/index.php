<?php
require_once("config.php");

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalma@wbtinternet.com");
$cad->setSenha("123456");

echo $cad;

?>