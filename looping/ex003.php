<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form>
        <input type="text" name="name">
        <input type="date" name="nascimento">
        <input type="submit" value="ok">

    </form>
    <?php

    if(isset($_GET)){

        foreach ($_GET as $key => $value) {

            echo "Nome do campo: $key";
            echo "Valor do campo: $value";
            echo "<hr>";
        } 
    }

    $pessoas = ["enzo" => 34,
     "juan" => 34,
      "Adler"];
    
    foreach ($pessoas as $nome => $idade) {
        echo "$nome tem $idade anos <br>";
    }


    /* $meses = array("janvier", "février", "mars", "avril", "mai", "juin", "julliet", "aout", "septembre", "octobre", "novembre", "decembre");

        foreach ($meses as $index => $mes) {

            echo "indice: $index <br> <br> "; // vai mostrar a posição da variavel
            echo " O mês é  $mes  <br>"; // vai exibir toas as variaveis
        }*/

    ?>
</body>

</html>