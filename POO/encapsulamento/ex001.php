<?php 
//forma de seleciionar quem vai acessar e a forma de quem vai acessar
class Pessoa {
    public $nome = "Enzo sena";
    protected $idade = 20;
    private $senha  = "123456";

    public function verDados(){
        $this->nome. "<br/>";
        $this->idade . "<br/>";
        $this->senha . "<br/>";
    }

}

$obj = new Pessoa();

echo $obj->verDados();
//echo $obj->idade. "<br/>";




?>