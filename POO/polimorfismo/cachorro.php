<?php 
require_once "ex001.php";

class Cachorro extends Animal{
    public function falar()
    {
        return "latir";
    }
    public function mover()
    {
        return "anda";
    }
}

$tito = new Cachorro;

echo $tito->falar();







?>