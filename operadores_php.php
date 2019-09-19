<?php

//Operadores de Atribuição

/*$nome = "wbt"; 
echo $nome." mais alguma coisa<br>"; 

$nome .= " treinamentos";

echo $nome;

$valorTotal = 0;

$valorTotal += 100;
$valorTotal += 25;

//$valorTotal -= 10;

$valorTotal *= .9;

echo $valorTotal;*/
/////////////////////////////////////
//Operadores Artitméticos

/*$a = 10;
$b = 2;

echo $a + $b;

echo '<br>';

echo $a - $b;

echo '<br>';

echo $a * $b;

echo '<br>';

echo $a / $b;

echo '<br>';

echo $a % $b;

echo '<br>';

echo $a ** $b;*/
/////////////////////////////////////
//Operadores de Comparação
/*$a = 30;
$b = 55;

var_dump($a > $b);
echo '<br>';
var_dump($a < $b);
echo '<br>';
var_dump($a == $b); //verifica se os valores são iguais
echo '<br>';
var_dump($a === $b); //verifica se os valores são idênticos
echo '<br>';

var_dump($a != $b); //verifica se as variáveis não possuem valores iguais
echo '<br>';
var_dump($a !== $b); //verifica se as variáveis não possuem valores idênticos

$a = 50;
$b = 35;

var_dump($a <=> $b); // spaceship*/

/*$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c; //se for nulo imprima (coalescência nula)*/
////////////////////////////////////////////////////
//Operadores de Incrementação e decrementação
/*$a = 10;
echo ++$a;
echo '<br>';

echo $a;
echo '<br>';
echo --$a;*/
/////////////////////////////////////////////////////
//ordem de operações
//$resultado = 10 + 3 / 2;

//echo $resultado;

//$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;
$resultado = (10 + 3) / 2 > 5 || 10 + 5 < 3;

var_dump($resultado);


?>