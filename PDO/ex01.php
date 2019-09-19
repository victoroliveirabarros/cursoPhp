<?php

$conn = new PDO("mysql:dbname=rede_olt;host=Localhost", "wbt", "abc@1234WBT");

$stmt = $conn->prepare("SELECT * FROM usuarios");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($results as $row){
    foreach($row as $key => $value){

        echo "<strong>".$key.":</strong>".$value."<br/>";

    }

    echo "*********************************************<br>";

}

//var_dump($results);


?>