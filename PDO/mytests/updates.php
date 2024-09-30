<?php
$conection =  new PDO("mysql:dbname=**;host=127.0.0.1", "root", "");

$stmt = $conection->prepare("UPDATE clientes SET nome = :LOGIN, passwords = :PASSWORD, email = :EMAIL, id = :ID");
$login = "Cacilda";
$password = "1345";
$email = "cacilda@hotmail.com";
$id;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":EMAIL", $email);
$stmt->bindParam(":ID", $id);
$stmt->execute();
echo "inserido com sucesso,  obrigado";

// atualizando DADOS
?>