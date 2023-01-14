<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body>
    <?php
        $contador = 0;
        $a = 1000000;
        $b = 1300000;
        do{
            $a = ($a * 0.03) + $a;
            $b = ($b * 0.02) + $b;
            $contador++;
        }while($a < $b);
        echo "$contador <br>";
    ?>
</body>
</html>