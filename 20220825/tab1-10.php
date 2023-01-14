<!DOCTYPE html>
<?php
    $num = isset($_POST['num']) ? $_POST['num'] : 0;
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Tab</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Atividade</legend>
            <label for="num">Digite qual tabuada deseja:</label>
            <input type="text" name="num" id="num"><br>
            <input type="submit" value="Verificar"><br>
<?php
    for($i = 1; $i <= 10; $i += $num){
        $multi = $i * $num;
    }
    echo "$i X $num = $multi";
?>
        </fieldset>
    </form>
</body>
</html>