<?php

$conn = new PDO("mysql:host=localhost;dbname=rede_olt", "wbt", "abc@1234WBT");

$stmt = $conn->prepare("UPDATE user_log SET usuario = :USUARIO , pagina = :PAGINA, descricao = :DESCRICAO WHERE id = :ID");

$usuario = "victor";
$pagina = "curso1.php";
$descricao = "Teste PDO update";
$id = 894;

$stmt->bindParam(":USUARIO", $usuario);
$stmt->bindParam(":PAGINA", $pagina);
$stmt->bindParam(":DESCRICAO", $descricao);
$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Dados alterados com sucesso!";


?>