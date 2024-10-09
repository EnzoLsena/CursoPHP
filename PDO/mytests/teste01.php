<?php 
$conexao = new PDO("mysql:dbname=hdh;host=127.0.0.1", "dgt", "dg");

$stmt = $conexao->prepare("INSERT INTO clientes (nome, passwords, email) VALUES (:LOGIN, :PASSWORD, :EMAIL)");
$login = "Jorisvalda";
$email = "machucadalgisa@gmail.com";
$pass = 2343;

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $pass);
$stmt->bindParam(":EMAIL", $email);

$stmt->execute();

echo "Seus dados foram inserido com sucesso.";


?>