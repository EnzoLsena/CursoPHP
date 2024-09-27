<?php
require_once "Pessoa.php";
class Secretaria extends Pessoa
{
    private $setor;
    private $demandas;

    public function getDemanda()
    {
        return $this->demandas;
    }

    public function setDemanda($trabalho)
    {
        $this->demandas = $trabalho;
    }
}
$sec1 = new Secretaria();
?>