<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
    require_once "../looping/ex001.php";
    
    echo '<select>';
    for($i=date("Y"); $i >= date("Y") - 10; $i--){
        echo '<option value ="'.$i.'">'.$i.'</option>';
    }
    echo '</select>';
    ?>

</body>

</html>