<?php

$nome = "Victor";

function teste(){

    global $nome;
    echo $nome;

}

function teste2(){

    $nome = "Alan";
    echo $nome." agora no teste 2";
    
}

teste();

teste2();

?>