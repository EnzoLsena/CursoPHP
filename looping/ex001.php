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
        
        $diaAtual = date("w");

        
        for ($i = 0; $i < 7; $i++) {
            
            $diaSemana = ($diaAtual + $i) % 7;

            
            switch ($diaSemana) {
                case 0:
                    $nomeDia = "Domingo";
                    break;
                case 1:
                    $nomeDia = "Segunda";
                    break;
                case 2:
                    $nomeDia = "Terça";
                    break;
                case 3:
                    $nomeDia = "Quarta";
                    break;
                case 4:
                    $nomeDia = "Quinta";
                    break;
                case 5:
                    $nomeDia = "Sexta";
                    break;
                case 6:
                    $nomeDia = "Sábado";
                    break;
            }

            
            echo '<option value="' . $diaSemana . '">' . $nomeDia . '</option>';
        }
        ?>
    </select>


</body>

</html>