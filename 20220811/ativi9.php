<!DOCTYPE html>
<?php
    $num = 0;
    if(isset($_POST['num']))
        $num = ($_POST['num']);
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 9</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Atividade 9</legend>
            <label for="num">Número</label>
            <input type="text" name="num" id="num"><br>
            <input type="submit" value="Enviar"><br>
<?php
    if(isset($_POST['num'])){
    $acumulador = 1;
    for($i = 1; $i <= $num; $i++){
        $acumulador = $acumulador * $i;
    }
    echo "Fatorial: $acumulador";
}
?>
        </fieldset>
    </form>
</body>
</html>