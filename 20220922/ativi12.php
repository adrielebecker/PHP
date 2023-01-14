<!DOCTYPE html>
<?php
    require_once('funcoes.php');
    $num1 = isset($_POST['num1']) ? $_POST['num1'] : 0;
    $num2 = isset($_POST['num2']) ? $_POST['num2'] : 0;
    $num3 = isset($_POST['num3']) ? $_POST['num3'] : 0;
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 12</title>
</head>
<body>
    <form action="" method="post">
        Num1: <input type="text" name="num1" id="num1"><br>
        Num2: <input type="text" name="num2" id="num2"><br>
        Num3: <input type="text" name="num3" id="num3">
        <input type="submit" value="Enviar"><br>
<?php
    if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])){
        $ordem = ordemCrescente($num1,$num2,$num3);
        echo $ordem;
    }
?>
    </form>
</body>
</html>