<?php
require_once "ex001.php";

class Passaro extends Animal
{
    public function falar()
    {
        return "Canta";
    }
    public function mover()
    {
        return "Voa e ".parent::mover(); // chamao metodo da classe pai
    }
}

$kiro = new Passaro;

echo $kiro->falar();