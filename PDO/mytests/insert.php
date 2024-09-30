<?php
$conection =  new PDO("mysql:dbname=**;host=127.0.0.1", "root", "");

$stmt = $conection->prepare("INSERT INTO clientes (nome, passwords, email) VALUES (:LOGIN, :PASSWORD, :EMAIL)");
$login = "Jorilda";
$password = "13453";
$email = "jorilda@hotmail.com";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":EMAIL", $email);
$stmt->execute();
echo "inserido com sucesso";

// INSERINDO DADOS