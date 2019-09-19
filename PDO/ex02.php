<?php

$conn = new PDO("mysql:host=localhost;dbname=rede_olt", "wbt", "abc@1234WBT");

$stmt = $conn->prepare("INSERT INTO user_log (usuario, pagina, descricao) VALUES (:USUARIO, :PAGINA, :DESCRICAO)");

$usuario = "victor";
$pagina = "curso.php";
$descricao = "Teste PDO";

$stmt->bindParam(":USUARIO", $usuario);
$stmt->bindParam(":PAGINA", $pagina);
$stmt->bindParam(":DESCRICAO", $pagina);

$stmt->execute();

echo "Inserido OK!";


?>