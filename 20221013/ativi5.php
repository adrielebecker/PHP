<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body>
    <?php
        require_once('funcoes/funcoes.php');
        $nome = ["Adriele", "Gustavo", "Marlene", "Reginaldo", "Beatriz"];
        $salario = [1000.00, 2000.00, 3000.00, 4000.00, 5000.00];

        echo ajusteSalario($nome, $salario);
    ?>
</body>
</html>