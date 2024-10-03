<?php 
$file = fopen("med.txt", "w+");
fclose($file);

unlink("med.txt");

echo "arquivo removido com sucesso";
?>