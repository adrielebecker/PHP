<!DOCTYPE html>
<?php
    require_once('funcoes.php');
    $num = isset($_POST['num']) ? $_POST['num']: 0;
    $fat = 1;
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Número: <input type="text" name="num" id="num">
        <input type="submit" value="Enviar"><br>
<?php
    if(isset($_POST['num'])){
    $fatorial = fatorial($num, $fat);
    echo "O fatorial de ".$num." é: ".$fatorial;
    }
?>
    </form>
</body>
</html>