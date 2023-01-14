<!DOCTYPE html>
<?php
    $idade = isset($_POST['idade']) ? $idade = ($_POST['idade']) : 0;

    function recebeIdade($idade){
        if($idade > 0){
            if($idade < 18){
                return "Menor de idade!";
            } 
            else{
                return "Maior de idade!";
            }
        } 
        else{
            return "Idade inválida!";
        }
    }
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2 - funções</title>
</head>
<body>
    <form action="" method="post">
        Idade: <input type="text" name="idade" id="idade">
        <input type="submit" value="Enviar">
        <br>
<?php
    $mensagem = recebeIdade($idade);
    echo $mensagem;
?>
    </form>
</body>
</html>