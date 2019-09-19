<?php

$conn = new PDO("mysql:host=localhost;dbname=rede_olt", "wbt", "abc@1234WBT");

$stmt = $conn->prepare("DELETE FROM user_log WHERE id = :ID");

$id = 894;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "Delete OK!";


?>