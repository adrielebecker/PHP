<!DOCTYPE html>
<?php
    $placa = 0;
    if(isset($_POST['placa']))
        $placa = ($_POST['placa']);
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
            <legend>Atividades de seleção de multipla escolha!</legend>
            <label for="placa">Digite o último número da placa do carro:</label>
            <input type="text" name="placa" id="placa"><br>
            <input type="submit" value="Verificar" name="acao" id="acao">
            <br><br>
<?php
if(isset($_POST['placa'])){
    switch ($placa){
        case 1:
        case 2:
            echo "Não circular na 2º feira";
            break;
        case 3:
        case 4: 
            echo "Não circular na 3º feira";
            break;
        case 5:
        case 6:
            echo "Não circular na 4º feira";
            break;
        case 7:
        case 8:
            echo "Não circular na 5º feira";
            break;
        case 9:
        case 0:
            echo "Não circular na 6ºfeira";
            break;
        default:
            echo "Número inválido";
            break;
    }
}
?>
        </fieldset>
    </form>
</body>
</html>