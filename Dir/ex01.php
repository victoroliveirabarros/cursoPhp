<?php

$name = "images";

if(!is_dir($name)){
    mkdir($name);
    echo "Diretório ".$name." criado com sucesso";
} else{
    echo "Diretório já existe";
}

//para remover
//rmdir($name);

?>