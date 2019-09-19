<?php

$conn = new mysqli("Localhost", "wbt", "abc@1234WBT", "rede_olt");

if($conn->connect_error){
    echo "Error: ".$conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO user_log (usuario, pagina, descricao) VALUES (?, ?, ?)");

$stmt->bind_param("sss", $user, $pagina, $descricao);

$user = "victor.oliveira";
$pagina = "curso.php";
$descricao = "Teste do curso PHP7";

$stmt->execute();

?>