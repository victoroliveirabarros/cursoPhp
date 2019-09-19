<?php

$conn = new PDO("mysql:host=localhost;dbname=rede_olt", "wbt", "abc@1234WBT");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM user_log WHERE id = ?");

$id = 893;

$stmt->execute(array($id));

//$conn->rollBack();
$conn->commit();

echo "Delete OK!";


?>