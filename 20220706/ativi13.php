<!DOCTYPE html>
<?php
    $ano = 0;
    if(isset($_POST['ano']))
       $ano = ($_POST['ano']);
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
            <label for="ano">Digite o ano que você nasceu:</label>
            <input type="text" name="ano" id="ano"><br>
            <input type="submit" name="acao" id="acao" value="Verificar"><br>
<?php
    if(isset($_POST['ano']))
        
    if($ano <= 2006){
        echo "Você ja pode votar!";
    }
    else{
        echo "Você ainda não pode votar!";
    }
?>
        </fieldset>
    </form>
</body>
</html>