<!DOCTYPE html>
<?php
    $num = isset($_POST['num']) ? $_POST['num'] : 0;

    function verificaPositivo($num){
       return $num > 0;
        // if($num > 0){
        //     echo "É positivo!";
        //     return true;
        // }
        // else{
        //     echo "É negativo!";
        //     return false;
        // }
    }
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body>
    <form action="" method="post">
        Número: <input type="text" name="num" id="num">
        <input type="submit" value="Enviar">
        <br>
<?php
    $variavel = verificaPositivo($num);
    echo $variavel
?>
    </form>
</body>
</html>