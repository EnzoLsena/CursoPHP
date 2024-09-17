<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    $idade = 18;
    
    if($idade > 18){
        echo("Pode, tirar a habilitação");
    } else if ($idade = 18) {
        echo("O processo da sua hablitacao esta em andamento");
    } else {
        echo("Você não tem idade suficiente para tirar habilitação");
    }
    
    
    
      ?>

</body>

</html>l