<?php

class Pessoa
{
    public $nome = "Enzo sena";
    protected $idade = 20;
    private $senha  = "123456";

    public function verDados()
    {
        $this->nome . "<br/>";
        $this->idade . "<br/>";
        $this->senha . "<br/>";
    }
}

class Programador extends Pessoa {
    
}

$obj = new Programador();

echo $obj->verDados();
?>