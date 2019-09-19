<?php

$conn = new mysqli("Localhost", "wbt", "abc@1234WBT", "rede_olt");

if($conn->connect_error){
    echo "Error: ".$conn->connect_error;
}

$result = $conn->query("SELECT * FROM usuarios");

$data = array();

while($row = $result->fetch_assoc()){ //or fecth_array(MYSQLI_ASSOC)
    
    array_push($data, $row);
    //var_dump($row);

}

echo json_encode($data);

?>