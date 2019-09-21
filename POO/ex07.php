<?php 

class Documento {

    private $numero;

    public function getNumero(){

        return $this->numero;

    }

    public function setNumero($n){

        $this->numero = $n;

    }

}

class CPF extends Documento {

    public function validar():bool{

        $numeroCPF = $this->getNumero();
       
        //validacao CPF

        return true;

    }

}

$doc = new CPF();

$doc->setNumero('02167585217');

var_dump($doc->validar());

echo $doc->getNumero();

?>