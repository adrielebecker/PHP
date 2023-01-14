<!DOCTYPE html>
<?php
    require_once('funcoes.php');
    $caractere = isset($_POST['caractere']) ? $_POST['caractere'] : "";
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
        Caractere: <input type="text" name="caractere" id="caractere">
        <input type="submit" value="Enviar"><br>
<?php
    if(isset($_POST['caractere'])){
        $verificar = verificaMaiuscula($caractere);
        echo $verificar;
    }
?>
    </form>
</body>
</html>