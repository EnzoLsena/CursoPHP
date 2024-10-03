<?php 
// aqui está umaa funçao para scanear um diretorio
$data= array();
$imgs = scandir("images");
var_dump($imgs);

foreach ($imgs as $img) {
    if(!in_array($img, array(".", ".."))) {
        
        $filename = "images". DIRECTORY_SEPARATOR. $img;
        
        $info = pathinfo($filename);
        
        $info["size"] = filesize ($filename);
        $info["url"] = "http://localhost/grDirector/".str_replace("//", "\\", $filename);

        
        array_push($data, $info);
    }
}

echo json_encode($data);




?>