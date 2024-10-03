<?php

class Sql extends PDO
{

    private $conn;

    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
    }

    // Corrigido: Nome correto do método setParams
    private function setParams($stmt, $parameters = array())
    {
        foreach ($parameters as $key => $value) {
            $this->setParam($stmt, $key, $value); // Usa setParam para cada parâmetro
        }
    }

    // Corrigido: Usa bindParam corretamente
    private function setParam($stmt, $key, $value)
    {
        $stmt->bindParam($key, $value);
    }

    // Método query corrigido
    public function exequery($rowQuery, $params = array())
    {
        $stmt = $this->conn->prepare($rowQuery);
        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;
    }

    // Corrigido: Chamada de query
    public function select($rowQuery, $params = array())
    {
        $stmt = $this->exequery($rowQuery, $params); // Corrigido: $this->query
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}




?>