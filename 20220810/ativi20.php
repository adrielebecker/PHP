<!DOCTYPE html>
<?php
    $num = 0;
    $tipo = 0;
    if(isset($_POST['num']) && isset($_POST['tipo'])){
        $num = ($_POST['num']);
        $tipo = ($_POST['tipo']);
    }
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
            <legend>Atividade 20</legend>
            <label for="num">Digite um número:</label>
            <input type="text" name="num" id="num"><br>
            <label for="tipo">Digite o tipo do cálculo:</label>
            <input type="text" name="tipo" id="tipo"><br>
            <input type="submit" value="Calcular" name="acao" id="acao">
            <br>
<?php
    if(isset($_POST['num']) && isset($_POST['tipo'])){
        switch ($tipo){
            case 1: 
                $metade = $num / 2;
                echo "A metade de $num é: $metade";
                break;
            case 2:
                $dobro = $num * 2;
                echo "O dobro de $num é $dobro";
                break;
            case 3:
                $quadrado = $num * $num;
                echo "O quadrado de $num é $quadrado";
                break;
            case 4:
                $porce = $num * 60 / 100;
                echo "60% de $num é $porce";
                break;
            default:
                echo "Tipo inválido";
        }
    }
?>
        </fieldset>
    </form>
</body>
</html>