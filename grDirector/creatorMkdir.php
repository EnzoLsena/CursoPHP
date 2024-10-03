<?php 
$name = "images";

if(!is_dir($name)) {
    mkdir($name);

    echo "Diretorio $name criado com sucesso.";
} else {

    //rmdir($name); esta simples função remove
    echo "já existe o diretorio $name";
}


?>