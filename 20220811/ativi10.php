<!DOCTYPE html>
<?php
    $limite = 0;
    $incre = 0;
    if(isset($_POST['limite']) && isset($_POST['incre'])){
        $limite = ($_POST['limite']);
        $incre = ($_POST['incre']);
    }    
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 10</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Atividade 10</legend>
            <label for="limite">Limite:</label>
            <input type="text" name="limite" id="limite"><br>
            <label for="incre">Incremento:</label>
            <input type="text" name="incre" id="incre"><br>
            <input type="submit" value="Enviar"><br>
<?php
    for($i = 0; $i <= $limite; $i = $i + $incre){
        echo "$i <br>";
    }
?>
        </fieldset>
    </form>
</body>
</html>