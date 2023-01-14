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
    <title>Atividade 8</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Atividade 8</legend>
            <label for="num">Número:</label>
            <input type="text" name="num" id="num"><br>
            <input type="submit" value="Enviar"><br>
<?php
    for($i = 1; $i <= $num; $i++){
        // ou if($i % 15 == 0)
        if($i % 3 == 0 && $i % 5 == 0){
                echo "$i <br>";
            }
        }
?>
        </fieldset>
    </form>
</body>
</html>