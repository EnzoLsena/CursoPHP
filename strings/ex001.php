<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
        $nome = "enzo sena";

        echo strtoupper($nome); // funcao para deixar tudo maiusculo

        echo strtolower($nome); // funcao para deixar tudo minusculo

        echo ucfirst($nome); // inicial maiuscula
        
        echo "<br>";
        echo ucwords($nome); // inicial maiuscula

        $nome = str_replace("o", "0", $nome);




    ?>
</body>

</html>