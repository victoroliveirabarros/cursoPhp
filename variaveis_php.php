<?php

$nome = "WBT";

//echo $nome;

//var_dump($nome);


//camelCase -- primeiro nome minusculo segundo sem espaço e com a primeira letra Maiúscula.
$anoNascimento = 1990;
$nomeCompleto = "Victor Oliveira Barros do Nascimento";

$nomeIdade = $nomeCompleto." ".$anoNascimento; // concatenação

echo $nomeIdade;
//exit; // Stop o código

//palavra reservada '$this'

echo $nomeCompleto;
echo '<br>';

unset($nomeCompleto); //elimina varíavel da memória

if(isset($nomeCompleto)){ // verifica se a variável existe
    echo $nomeCompleto;
}

?>