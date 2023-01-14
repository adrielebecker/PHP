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
    <title>Atividade 9</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Atividade 9</legend>
            <label for="num">Digite um número:</label>
            <input type="number" name="num" id="num">
            <input type="submit" name="acao" id="acao" value="Verificar"><br>
            <br>
<?php  
    $divi = $num % 2;

    if(isset($_POST['num'])){
        if($divi == 0){
            echo "$num é par!";
        }
        else {
            echo "$num é ímpar!";
        }
    }
?>
        </fieldset>
    </form>
</body>
</html>