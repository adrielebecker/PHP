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
    <title>Atividade 3</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Atividade 3</legend>
            <label for="num">Digite um número</label>
            <input type="number" name="num" id="num">
            <input type="submit" name="acao" id="acao" value="Enviar"><br>  
<?php
if ($num <= 10){
    echo "F1";}
if ($num > 10 && $num <= 100){
    echo "F2";}
if ($num > 100){
    echo "F3";}

?>
        </fieldset>
    </form>
</body>
</html>