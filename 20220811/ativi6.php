<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>
<body>
    <?php
        for($i = 2; $i <=100; $i = $i+2){
            if($i % 2 == 0){
                $quadr = $i * $i;
                echo "$i * $i = $quadr <br>";
            }
        }
    ?>
</body>
</html>