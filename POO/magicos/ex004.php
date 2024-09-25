<?php 
class Computador{
    
private $mouse;
private $teclado;
private $monitor;

public function __construct($m, $t, $mo) {
    $this->mouse = $m;
    $this->teclado = $t;
    $this->monitor = $mo;
        
}
public function __toString() //isso transforma o objeto em estring para poder dar um echo nele.
{
    return "Meu mouse é $this->mouse, meu teclado é $this->teclado e meu monitor é da $this->monitor";
}

public function __destruct()
{
    var_dump("Destruir");
}







}
$meuComputador = new Computador("Logitech", "ReDragon", "Pichau");

//var_dump($meuComputador);


echo $meuComputador;


?>