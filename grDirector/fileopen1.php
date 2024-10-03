<?php 
// cria um arquivo de texto e insere dados dentro, legal demais
//$file = fopen("log.txt", "w+");
$file = fopen("log.txt", "a+");
$frase = "Eu sou programdor PHP na medlynx";
$org = "\r\n";
fwrite($file, $frase.$org);

fclose($file);

echo "Arquivo criado com sucesso!";

?>