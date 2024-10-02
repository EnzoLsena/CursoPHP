<?php 
//commit confirma, ralback cancela.
$conn = new PDO("mysql:host=localhost;dbname=medlynx", "root", "");

$conn->beginTransaction();

$stmt = $conn->prepare("DELETE FROM clientes WHERE id = ?");

$id = 0;


$stmt->execute(array($id));

//$conn->rollBack();
$conn->commit();
echo "Delete no.";



?>