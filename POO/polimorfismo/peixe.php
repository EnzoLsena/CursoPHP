<?php
require_once "ex001.php";

class Peixe extends Animal
{
    public function falar()
    {
        return "não faz som";
    }
    public function mover()
    {
        return "Nada";
    }
}

$dark = new Peixe;

echo $dark->falar();