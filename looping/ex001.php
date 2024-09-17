<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <select>
        <?php
        for ($i = date("Y"); $i >= date("Y") - 100; $i--) {

            echo '<option value="'.$i.'">'. "Ano $i".'</option>';
        }

        

        ?>
    </select>

</body>

</html>