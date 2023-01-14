<!DOCTYPE html>
<?php
$nome = "";
if(isset($_POST['nome']))
   $nome = ($_POST['nome']);

$salarioAtual = 0;
if(isset($_POST['salarioAtual']))
   $salarioAtual = ($_POST['salarioAtual']);
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Atividade 6</legend>
            <label for="nome">Digite o nome do funcionário:</label>
            <input type="text" name="nome" id="nome"><br>
            <label for="salarioAtual">Digite o seu salário atual</label>
            <input type="number" name="salarioAtual" id="salarioAtual">
            <input type="submit" name="acao" id="acao" value="Enviar"><br><br>
<?php
if ($salarioAtual < 1750 && $salarioAtual >= 1500){
    $total = $salarioAtual * 12 / 100;    
    $salarioFinal = $total + $salarioAtual;
    echo "O funcionário ",$nome, " receberá R$: ",$salarioFinal;}

if ($salarioAtual < 2000 && $salarioAtual >= 1750){
    $total = $salarioAtual * 10 / 100;
    $salarioFinal = $total + $salarioAtual;
    echo "O funcionário ",$nome, " receberá R$: ",$salarioFinal;}

if ($salarioAtual < 3000 && $salarioAtual >= 2000){
    $total = $salarioAtual * 7 / 100;
    $salarioFinal = $total + $salarioAtual;
    echo "O funcionário ",$nome, " receberá R$: ",$salarioFinal;}

if ($salarioAtual > 3000){
    $total = $salarioAtual * 5 / 100;
    $salarioFinal = $total + $salarioAtual;
    echo "O funcionário ",$nome, " receberá R$: ",$salarioFinal;}
?>
        </fieldset>
    </form>
</body>
</html>