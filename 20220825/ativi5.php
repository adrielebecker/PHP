<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body>
    <?php
        $contador = 0;
        $chico = 1.50;
        $juca = 1.10;
        do{
            $juca = $juca + 0.03;
            $chico = $chico + 0.02;
            $contador++;
        }
        while($juca < $chico);
        echo "$contador <br>";
    ?>
</body>
</html>