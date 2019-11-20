<?php

/* trazer dados do banco de dados*/

$headers = [];

foreach($usuarios as $key => $value){
    array_push($headers, ucfirst($key));
}

$file = fopen("usuarios.csv", "w+");

fwrite($file, implode(",", $headers)."\r\n");

foreach($usuarios as $row){
    $data = [];

    foreach($row as $key => $value){
        array_push($data, $value);
    }//end foreach de coluna

    fwrite($file, implode(",", $data)."\r\n");

}//end forach de linha

fclose($file);

?>