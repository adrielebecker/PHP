<!DOCTYPE html>
<?php
    $r = isset($_POST['r']) ? $_POST['r'] : 0;

    function calculaVolume($r){
        $v = (4 * 3.14 * ($r*$r*$r) / 3);
        return $v;
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Raio <input type="text" name="r" id="r">
        <input type="submit" value="Enviar">
        <br>
<?php
    echo calculaVolume($r);
?>
    </form>
</body>
</html>