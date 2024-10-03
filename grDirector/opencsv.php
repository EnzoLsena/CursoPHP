<?php 

require_once "config.php";
$sql = new Sql();

$users = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

$headers = array();

$org = "\r\n";

foreach($users[0] as $user => $value) {
    
    array_push($headers, $user);
}

$file = fopen("users.csv", "w+");

fwrite($file,implode(", ", $headers).$org);

foreach ($users as $row) {
    $data = array();
    foreach ($row as $user => $value) {
        array_push($data, $value);
    }
    fwrite($file, implode(", ", $data). $org);
}

fclose($file);

?>