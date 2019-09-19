<?php

/*$frutas = array("Laranja", "Abacaxi", "Melancia");

print_r($frutas);*/

/*$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Focus";

echo $carros[0][3]; // imprime camaro
echo end($carros[1]); //traga o ultimo nessa posição*/

$pessoas = array();

array_push($pessoas, array(
   'nome' => 'Victor',
   'idade' => '21' 
));

array_push($pessoas, array(
    'nome' => 'Andréa',
    'idade' => '21' 
 ));

 print_r($pessoas[0]['nome']);

?>