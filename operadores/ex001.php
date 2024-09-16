<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Estudos php</title>
</head>

<body>
    <?php 
    $nome = "Enzo Sena";
    $nome .= " Bonitao"; // isso faz com que eu adcione informações a minha variavel

    
    $cargo= "Estagiário";
    $empresa= "MedLynx";
    
    echo "$nome  tem o cargo de <strong>$cargo</strong> na $empresa. "; // aprendendo a fazer interpolação no php

    ////////////////////////////////////////////////////////////////////////
    

    $valorIni = 100;
    $valorIni += 50; // acrescenta um valor a variavel
    echo $valorIni;
    
    ////////////////////////////////////////////////////////////////////////

    $a = NULL;
    $b = 100;
    $c = 30;
    
    echo $a ?? $b ?? $c; // Nova funcionalidade disponivel no php7 onde verifico quem é nullo exibo a primeira com valor.

   

    
    ?>

</body>

</html>