<?php
$con =  new PDO("mysql:dbname=**;host=127.0.0.1", "root", "");
$stmt =  $con->prepare("SELECT * FROM clientes");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo json_encode($results);

foreach ($results as $row) {
    foreach ($row as $key => $value) {
        echo "<strong> $key </strong>: $value <br/>";
    }
    echo "********************************** <br/>";
}

// consulta