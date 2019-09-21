<?php 

interface Veiculo{

    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo{

    public function acelerar($velocidade){

        echo "O veiculo acelerou até ".$velocidade."Km/h";

    }

    public function frenar($velocidade){
   
        
        echo "O veiculo frenar até ".$velocidade."Km/h";

    }

    public function trocarMarcha($marcha){

        echo "O veiculo engatou a marcha ".$marcha;

    }

}

class DelRey extends Automovel {

    public function empurrar(){

    }

}

$carro = new Delrey();

$carro->acelerar(200);

//na classe abstrata não se pode instanciar um objeto diretamente a ela


?>