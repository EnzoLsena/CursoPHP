<?php 
$conection = new mysqli("***", "root", "", "***");
if($conection->connect_error) {
    echo "Erro de conexão: ". $conection->connect_error;
}

$query = $conection->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

$query->bind_param("ss", $login, $password);
$login = "Zeca frança";
$password = "123213";
$query->execute();

//INSERINDO DADDOS NO BANCO

  
?>