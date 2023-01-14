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
    <title>Atividade 10</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Atividade 10</legend>
            <label for="num">Digite um número:</label>
            <input type="number" name="num" id="num">
            <input type="submit" name="acao" id="acao" value="Verificar">
            <br>
<?php
    $divi3 = $num % 3;
    $divi5 = $num % 5;

    if(isset($_POST['num'])){

        if($divi3 == 0 && $divi5 == 0){
            echo "$num é multiplo de 3 e de 5!";
        }
        else{
            echo "$num não é multiplo de 3 e de 5!";
        }
    }
?>
        </fieldset>
    </form>
</body>
</html>