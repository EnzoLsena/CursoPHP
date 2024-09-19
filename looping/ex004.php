<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    
        $condition = true ;
        
        while($condition) {
            $number = rand(1, 10);

            if($number === 3 ) {
                echo "TRÊSSS";
                $condition = false;
            }
        echo "$number <br>";
        
        }
    ?>

</body>

</html>