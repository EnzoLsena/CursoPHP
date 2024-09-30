<?php 
$conection = new mysqli("***", "root", "", "***");
if($conection->connect_error) {
    echo "Erro de conexão: ". $conection->connect_error;
}
$result = $conection->query("SELECT * FROM  tb_usuarios ORDER BY deslogin");
$data = array();
while ($row = $result->fetch_assoc()) {
    
    array_push($data, $row);
}
echo json_encode($data);


//CONSULTANDO DADOS NO BANCO E TRANSFORMANDO EM JSON




?>