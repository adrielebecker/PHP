<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios 1</title>
</head>
<body>
    <?php 
    $valorA = 10;
    $valorB = 20;
    $auxiliar = $valorA;
    $valorA = $valorB;
    $valorB = $auxiliar;
    echo "O valor trocado de A é: $valorA <br> ";
    echo "O valor trocado de B é: $valorB"; 
    ?>
</body>
</html>