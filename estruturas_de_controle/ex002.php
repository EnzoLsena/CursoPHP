<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    
    $day = date("w");
    switch($day) {
        
        case 0: 
        echo "Domingo";
        break;

        case 1:
            echo "segunda";
            break;

        case 2:
            echo "terça";
            break;

        case 3:
            echo "quarta";
            break;

        case 4:
            echo "quinta";
            break;

        case 5:
            echo "sexta";
            break;

        case 6:
            echo "sabado";
            break;
        
    }
    
    
    ?>
</body>

</html>