<?php 
function soma(int ...$valores){ //isso faz com que eu TIPE os parametros.

    return array_sum($valores); 
}
echo soma(2, 4);


?>