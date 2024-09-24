<?php

$carro = array(
    'nome' => 'Porcshe 911',
    'ano' => 2023
);
//

foreach($carro as &$value) {
    
    if(gettype($value) === 'integer') $value += 1;
    echo "$value<br>";
}
print_r($carro);

?>