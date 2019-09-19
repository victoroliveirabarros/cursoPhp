<form>

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">

</form>
<?php

if(isset($_GET)){

    foreach($_GET as $key => $value){

        echo "Nome do campo: ".$key;
        echo "Valor do campo: ".$value;
        echo "<hr>";

    }

}

/*$meses = array(1,2,3,4,5,6,7,8,9,10,11,12);

foreach($meses as $index =>$mes){
    echo $index."-".$mes."<br>";
}*/


?>