<!DOCTYPE html>
<?php
    $idade = 0;
    if(isset($_POST['idade']))
        $idade = ($_POST['idade']);
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 11</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Atividade 11</legend>
            <label for="idade">Digite a idade de uma pessoa:</label>
            <input type="number" name="idade" id="idade">
            <input type="submit" name="acao" id="acao" value="Verificar">
            <br>
<?php
    if(isset($_POST['idade'])){
        if($idade >= 0 && $idade <= 130){
            if($idade > 0 && $idade < 12){
                echo "Criança";
            }
            elseif($idade >= 12 && $idade <=18){
                echo "Adolescente";
            }
            elseif($idade >= 19 && $idade < 60){
                echo "Adulto";
            }
            else{
                echo "Idoso";
                }
        }
        else{
            echo "Idade Inválida";
        }
    }
?>
        </fieldset>
    </form>
</body>
</html>