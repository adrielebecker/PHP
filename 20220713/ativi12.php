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
    <title>Atividade 12</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Atividade 12</legend>
            <label for="num">Digite um número:</label>
            <input type="number" name="num" id="num">
            <input type="submit" name="acao" id="acao" value="Verificar"><br>
<?php
    if(isset($_POST['num'])){
        if($num == 0){
            echo "$num é zero!";
        }
        elseif($num > 0){
            echo "$num é positivo!";
        }
        else{
            echo "$num é negativo!";
        }
    }

?>
        </fieldset>
    </form>
</body>
</html>