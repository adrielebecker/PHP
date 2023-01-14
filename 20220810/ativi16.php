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
    <title>Multipla escolha</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Atividade 16</legend>
            <label for="num">Digite um número:</label>
            <input type="number" name="num" id="num"><br>
            <input type="submit" value="Enviar">
            <br><br>
<?php
    if(isset($_POST['num'])){
        switch ($num){
            case 127:
                echo "Cento e vinte e sete";
                break;
            case 35:
                echo "Trinta e cinco";
                break;
            case 82:
                echo "Oitenta e dois";
                break;
            case 28:
                echo "Vinte e oito";
                break;
            case 115:
                echo "Cento e quinze";
                break;
            default:
                echo "Número não consta na base de dados";
        }
    }
?>
        </fieldset>
    </form>
</body>
</html>