<!DOCTYPE html>
<?php
    $num1 = 0;
    $num2 = 0;
    $num3 = 0;
    if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])){
        $num1 = ($_POST['num1']);
        $num2 = ($_POST['num2']);
        $num3 = ($_POST['num3']);
    }

?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 13</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Atividade 13</legend>
            <label for="num1">Digite o primeiro número:</label>
            <input type="number" name="num1" id="num1"><br>
            <label for="num2">Digite o segundo número:</label>
            <input type="number" name="num2" id="num2"><br>
            <label for="num3">Digite o terceiro número:</label>
            <input type="number" name="num3" id="num3">
            <input type="submit" name="acao" id="acao" value="Enviar"><br>
<?php
    if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['num3'])){
        if($num1 > $num2 && $num1 > $num3){
            echo "$num1 é maior que $num2 e $num3";
        }
        elseif($num2 > $num1 && $num2 > $num3){
            echo "$num2 é maior que $num1 e $num3";
        }
        else{
            echo "$num3 é maior que $num1 e $num2";
        }
    }
?>
        </fieldset>
    </form>
</body>
</html>