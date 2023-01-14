<!DOCTYPE html>
<?php
    $altPared = isset($_POST['altPared']) ? $_POST['altPared'] : 0;
    $larPared = isset($_POST['larPared']) ? $_POST['larPared'] : 0;
    $altAzul = isset($_POST['altAzul']) ? $_POST['altAzul'] : 0;
    $larAzul = isset($_POST['larAzul']) ? $_POST['larAzul'] : 0;
    $cont = 0;

    function quantAzulejos($altPared, $larPared, $altAzul, $larAzul, $cont){
        $areaP = $altPared * $larPared; 
        $areaA = $altAzul * $larAzul;
        for($i = $areaA; $i <= $areaP; $i++){
            $cont++;
        }
        echo $cont." Azulejos";
    }
    /*function calculaArea($altura, $largura){
        $area = $altura * $largura;
    }*/
        
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>
<body>
    <form action="" method="post">
        altura parede: <input type="text" name="altPared" id="altPared"><br>
        largura parede: <input type="text" name="larPared" id="larPared"><br>
        altura azulejo: <input type="text" name="altAzul" id="altAzul"><br>
        largura azulejo: <input type="text" name="larAzul" id="larAzul"><br>
        <input type="submit" value="Enviar"><br>
<?php
    quantAzulejos($altPared, $larPared, $altAzul, $larAzul, $cont);
?>
    </form>
</body>
</html>