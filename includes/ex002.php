<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    require "ex001.php";
    require_once "ex001.php"; // Ignora a chamada duas vezes.
    
    
    $res = somar(90, 30);

    echo $res;

    ?>
</body>

</html>