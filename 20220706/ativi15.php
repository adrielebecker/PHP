<!DOCTYPE html>
<?php
    $macas = 0;
    if(isset($_POST['macas']))
        $macas = ($_POST['macas']);
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 15</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Atividade 15</legend>
            <label for="macas">Número de maças compradas:</label>
            <input type="number" name="macas" id="macas"><br>
            <input type="submit" name="acao" id="acao" value="Calcular o valor da compra"><br>
<?php
    if(isset($_POST['macas']))

    if($macas < 12){
        $total = $macas * 0.3;
        echo "O total a pagar é de R$ $total";
    }
    else {
        $total = $macas * 0.25;
        echo "O total a pagar é de R$ $total";
    }
?>
        </fieldset>
    </form>
</body>
</html>