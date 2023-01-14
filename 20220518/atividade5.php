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
    $deposito = 1000;
    $taxa = 10;
    $antes = $deposito*$taxa/100;
    $depois = $deposito + $antes;
    echo "O valor do deposito é de: R$ $deposito <br>";
    echo "O valor da taxa é de: $taxa % <br>";
    echo "O valor do rendimento é de: R$ $antes <br>";
    echo "O valor total do rendimento é de: R$ $depois";
    ?>
</body>
</html>