<?php
function incluirClasse($Pessoa) {
    
    if(file_exists("$Pessoa.php")) {
        require_once("$Pessoa.php");
    }
    
}
//spl_autoload_register("incluirClasse");
spl_autoload_register(function($Pessoa) {
    if (file_exists("POO" . DIRECTORY_SEPARATOR . "encapsulamento". DIRECTORY_SEPARATOR . $Pessoa . "php")) {
        require_once("POO" . DIRECTORY_SEPARATOR . "encapsulamento". DIRECTORY_SEPARATOR . $Pessoa . "php");
    }
});
    

$pessoa = new Pessoa();
$pessoa->verDados();


?>