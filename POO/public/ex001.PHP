<?php 
class Pessoa{

    public $nome;

    public function falar(){
        
        return "meu nome é $this->nome";
        
    }
}

$enzo = new Pessoa();

$enzo->nome = "Enzo Levy";

echo $enzo->falar();

?>