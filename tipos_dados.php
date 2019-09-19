<?php

//Tipos de variáveis básicas
$nome = "Victor"; //string
$site = 'www.wbtinternet.com.br'; //string

$ano = 1998; //inteiro
$salario = 5500.99; //float
$bloqueado = false; //booleano
//////////////////////////////////////
//Tipos de variáveis compostas
$frutas = array("Abacaxi", "Laranja", "Manga");~//array
//echo $frutas[2];

$nascimento = new DateTime(); //objeto
//var_dump($nascimento);
////////////////////////////////////
//Tipos de variáveis especiais

$arquivo = fopen("tipos_dados.php", "r"); //resources
//var_dump($arquivo);

$nulo = NULL; //null
$vazio = "";

?>