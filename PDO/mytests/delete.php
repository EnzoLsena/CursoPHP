<?php

$conection =  new PDO("mysql:dbname=**;host=127.0.0.1", "root", "");

$stmt = $conection->prepare("DELETE clientes WHERE id = :ID");

$id;

$stmt->bindParam(":ID", $id);

$stmt->execute();

echo "deletado com sucesso,  obrigado";

// deletando DADOS
?>