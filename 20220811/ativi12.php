<!DOCTYPE html>
<?php
    $num = isset($_POST['num']) ? $_POST['num'] : 0;
    //echo $num;
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
        <fieldset>
            <legend>Atividade 12</legend>
            <label for="num">Número:</label>
            <input type="text" name="num" id="num"><br>
            <input type="submit" name="acao" id="acao" value="Enviar"><br>
<?php
    for($i = $num; $i >= 1; $i--){
        $contador = 0;
        for($i2 = $i; $i2 >= 1; $i2--){
            if($i % $i2 == 0){
                $contador++;
            }
        }
        if($contador <= 2){
            echo "$i <br>";
        }
    }
?>
        </fieldset>
    </form>
</body>
</html>