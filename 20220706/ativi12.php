<!DOCTYPE html>
<?php
    $num1 = 0;
    if(isset($_POST['num1']))
       $num1 = ($_POST['num1']);
    $num2 = 0;
    if(isset($_POST['num2']))
        $num2 = ($_POST['num2']);
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
            <label for="num1">Digite o primeiro número:</label>
            <input type="number" name="num1" id="num1"><br>
            <label for="num2">Digite o segundo número:</label>
            <input type="number" name="num2" id="num2"><br>
            <input type="submit" name="acao" id="acao" value="Verificar"><br>
<?php
    if(isset($_POST['num1'])) if(isset($_POST['num1']))

    if($num1 > $num2){
        echo "O número $num1 é maior que o número $num2";
    }
    elseif($num1 == $num2){
        echo "O número $num1 é igual ao número $num2";
    }
    else{
        echo "O número $num1 é menor que o número $num2";
    }
?>
        </fieldset>
    </form>
</body>
</html>