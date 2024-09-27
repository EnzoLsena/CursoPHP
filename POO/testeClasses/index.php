<?php 

class Esportes {
    protected $bola= 1;
    protected $espaco;
    protected $jogadores;
    protected $arbitro = 1;
    protected $ponto = 0;

    public function fazerPonto($ataque, $defesa){
        
        if($ataque > $defesa) {
             $this->ponto++;
             echo "+1 ponto";
        }
        
         return $this->ponto;
            
    }
 

    public function exibir(){
        echo "Bola: ".$this->bola. "<br/>";
        echo "Espaço jogado: ".$this->espaco . "<br/>";
        echo " Quantidade de jogdadores: ".$this->jogadores . "<br/>";
        echo "Arbitro: ".$this->arbitro . "<br/>";
    }
}

class Futebol extends Esportes{
    
    protected $jogadores = 11;
    protected $espaco = "Campo";


}

class Volei extends Esportes
{

    protected $jogadores = 6;
    protected $espaco = "Quadra ou campo de areia";
}

class Basquete extends Esportes
{

    protected $jogadores = 5;
    protected $espaco = "Quadra";
}






$objb = new Basquete();
$objv = new Volei();
$objF = new Futebol();
//$obj = new Esportes();
//$obj->exibir();
echo "<h2>Futebol</h2>";
$objF->exibir();
echo "<h2>Volei</h2>";
$objv->exibir();
echo "<h2>Basquete</h2>";
$objb->exibir();

?>