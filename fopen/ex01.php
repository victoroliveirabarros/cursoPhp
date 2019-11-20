<?php
/*
r - read
w - write
a - write preservando text
*/

$file = fopen("log.txt", "w+");

fwrite($file, date("Y-m-d H:i:s"));

fclose($file);

echo "Arquivo criado com sucesso!";

?>