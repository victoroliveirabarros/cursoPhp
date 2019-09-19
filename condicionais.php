<?php

$qualIdade = 30;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if($qualIdade < $idadeCrianca){

    echo "Criança";

}elseif($qualIdade < $idadeMaior){

    echo "Adolescente";

}elseif($qualIdade < $idadeMelhor){
    
    echo "Adulto";

}else{
    echo "Idoso";
}

echo "<br>";

echo ($qualIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade";


?>