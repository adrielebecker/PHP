<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>
    <?php
    $valor = 1000;
    $gorjeta = 10;
    $totalG = $valor*$gorjeta/100; //ou valor fixo, 0.1
    $total = $valor+$totalG;
    echo "O valor gasto pelo cliente é de: R$ $valor <br>"; 
    echo "O valor de gorjeta é de: R$ $totalG <br>";
    echo "O valor total a pagar é de: R$ $total";  
    ?>
</body>
</html>