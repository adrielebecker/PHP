<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 7</title>
    <!--Contadores e acumuladores-->
</head>
<body>
    <?php
            $soma = 0;
        for($i = 0; $i <= 100; $i++ /*contador*/){
            $soma = $soma + $i;//acumulador
            echo "$i <br>";
        }
        echo "Soma: $soma";
    ?>
</body>
</html>