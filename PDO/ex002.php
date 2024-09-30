<?php 
$conection =  new PDO("mysql:dbname=dbphp7;host=127.0.0.1", "root","");

$stmt = $conection->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");
$login = "josé";
$password = "13453";

$stmt->bindParam(":LOGIN", $login );
$stmt->bindParam(":PASSWORD", $password);
$stmt->execute();
echo "inserido,  ok";

// INSERINDO DADOS
?>