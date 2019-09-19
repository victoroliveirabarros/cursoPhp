<?php
$pessoas = array();

array_push($pessoas, array(
   'nome' => 'Victor',
   'idade' => '21' 
));

array_push($pessoas, array(
    'nome' => 'Andréa',
    'idade' => '21' 
 ));

 echo json_encode($pessoas);

$json = '[{"nome":"Victor","idade":"21"},{"nome":"Andr\u00e9a","idade":"21"}]';

$data = json_decode($json, true);

var_dump($data);


?>