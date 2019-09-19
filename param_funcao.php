<?php

/*function ola($texto = "mundo", $periodo = "bom dia"){

    return "Olá $texto! $periodo<br>";
}

echo ola("muundo");
echo ola("Victor", "Boa Noite");
echo ola();*/


/*function ola(){

        $argumentos = func_get_args();

        return $argumentos;
    
}
var_dump(ola("Bom dia", 10));*/

/*$a = 10;

function trocaValor($b){

    $b += 50;

    return $b;

}

echo trocaValor($a);
echo "<br>";
echo $a;*/

/*$a = 10;

function trocaValor(&$b){

    $b += 50;

    return $b;

}

echo trocaValor($a);
echo "<br>";

echo trocaValor($a);
echo "<br>";
echo $a;*/

$pessoa = array(
    'Nome'=>'Victor',
    'Idade'=>21

);

foreach($pessoa as &$value){
    
    if(gettype($value) === 'integer') $value += 10;
    echo $value.'<br>';

}

print_r($pessoa);

?>