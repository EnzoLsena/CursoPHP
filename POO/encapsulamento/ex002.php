<?php

class Pessoa
{
    public $nome = "Enzo sena";
    protected $idade = 20;
    private $senha  = "123456";

    public function verDados()
    {
        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
    }
}

class Programador extends Pessoa {
    public function Vendocoisas(){
        echo $this->nome. "<br/>";
        echo $this->idade . "<br/>";
        //echo $this->senha . "<br/>"; Não vou conseguir exibir pois o metodo não é da mesma classe que ele e sim de uma classe herdeira
    
    }


}

$obj = new Programador();

$obj->verDados();
$obj->Vendocoisas();
?>