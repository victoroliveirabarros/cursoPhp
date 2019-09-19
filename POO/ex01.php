<?php

class Pessoa {

    public $nome; //Atributo

    public function falar(){ //Método

        return "O meu nome é ".$this->nome;
 
    }

}

$victor = new Pessoa();
$victor->nome = "Victor Oliveira";
echo $victor->falar();


?>