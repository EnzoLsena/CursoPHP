<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    $pessoas = array();
    
    array_push($pessoas, array(
        'nome' => 'Enzo',
        'idade' => '20'
    ));

    array_push($pessoas, array(
        'nome' => 'Brenno',
        'idade' => '30'
    ));
    //print_r($pessoas); exibindo toda array
   // print_r($pessoas[0]['nome']); exibindo ecpecificamente um item
   echo json_encode($pessoas)
    ?>

</body>

</html>