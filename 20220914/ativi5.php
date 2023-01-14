<!DOCTYPE html>
<?php
    $rad = isset($_POST['rad']) ? $_POST['rad'] : 0;

    function transformaGraus($rad){
        $gra = $rad * 180 / 3.14;
        return $gra;
    }
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body>
    <form action="" method="post">
        Radianos <input type="text" name="rad" id="rad">
        <input type="submit" value="Enviar"><br>
<?php
    echo transformaGraus($rad);
?>
    </form>
</body>
</html>