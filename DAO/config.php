<?php 
spl_autoload_register(function($nameClass) {
    $filename = "Classes".DIRECTORY_SEPARATOR.$nameClass . ".php"; 
    
    if (file_exists($filename)) {
        require_once($filename);
    }
});
?>