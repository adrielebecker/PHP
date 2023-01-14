<!DOCTYPE html>
<?php
    $paisA = isset($_POST['paisA']) ? $_POST['paisA'] : 0;
    $paisB = isset($_POST['paisB']) ? $_POST['paisB'] : 0;
    $taxaA = isset($_POST['taxaA']) ? $_POST['taxaA'] : 0;
    $taxaB = isset($_POST['taxaB']) ? $_POST['taxaB'] : 0;
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Atividade 2</legend>
            <label for="paisA">Número de habitantes do país A:</label>
            <input type="text" name="paisA" id="paisA"><br>
            <label for="paisB">Número de habitantes do país B:</label>
            <input type="text" name="paisB" id="paisB"><br>
            <label for="taxaA">Taxa de natalidade do país A:</label>
            <input type="text" name="taxaA" id="taxaA"><br>
            <label for="taxaB">Taxa de natalidade do país B:</label>
            <input type="text" name="taxaB" id="taxaB"><br>
            <input type="submit" value="Enviar" name="acao" id="acao"><br>
<?php
    $contador = 0;
    $a = $taxaA / 100;
    $b = $taxaB / 100;
    while($paisA < $paisB){
        $paisA = ($paisA * $a) + $paisA;
        $paisB = ($paisB * $b) + $paisB;
        $contador++;
    }
      echo "$contador <br>";
?>
        </fieldset>
    </form>
</body>
</html>