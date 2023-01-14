<!DOCTYPE html>
<?php
$titulo = "Calculadora";

$soma1 = 0;
if(isset($_GET['soma1']))
    $soma1 = $_GET ['soma1'];

$soma2 = 0;
if(isset($_GET['soma2']))
    $soma2 = $_GET ['soma2'];

$mult1 = 0; 
if(isset($_GET['mult1']))
    $mult1 = $_GET ['mult1'];

$mult2 = 0; 
if(isset($_GET['mult2']))
    $mult2 = $_GET ['mult2'];

$divi1 = 1; 
if(isset($_GET['divi1']))
   $divi1 = $_GET['divi1'];

$divi2 = 1; 
if(isset($_GET['divi2']))
    $divi2 = $_GET['divi2'];

$sub1 = 0; 
if(isset($_GET['sub1']))
    $sub1 = $_GET['sub1'];

$sub2 = 0; 
if(isset($_GET['sub2']))
    $sub2 = $_GET['sub2'];
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $titulo; ?></title>
</head>
<body>
    <form action="" method="get">
        <fieldset>
        <legend>Calculadora da soma</legend>
        <label for="soma1">Digite o primeiro número</label>
        <input type="number" name="soma1" id="soma1">
        <br>
        <label for="soma2">Digite o segundo número</label>
        <input type="number" name="soma2" id="soma2">
        <br><br>
        <input type="submit" name= "acao" id="acao" value="Calcular">
        <br><br>
<?php
$soma = $soma1+$soma2;
echo "A soma dos números é igual a $soma";
?>
        </fieldset>
    </form>
    <br><br><br>
    <form action="" method="get">
        <fieldset>
            <legend>Calculadora da multiplicação</legend>
            <label for="mult1">Digite o primeiro número</label>
            <input type="number" name="mult1" id="mult1">
            <br>
            <label for="mult2">Digite o primeiro número</label>
            <input type="number" name="mult2" id="mult2">
            <br>
            <input type="submit" name= "acao" id="acao" value="Calcular">
            <br><br>
            <?php
            $mult = $mult1*$mult2;
            echo "A multiplicação dos números é $mult";
            ?>
        </fieldset>
    </form>
    <br><br><br>
    <form action="" method="get">
        <fieldset>
            <legend>Calculadora da divisão</legend>
            <label for="divi1">Digite o primeiro número</label>
            <input type="number" name="divi1" id="divi1">
            <br>
            <label for="divi2">Digite o primeiro número</label>
            <input type="number" name="divi2" id="divi2">
            <br>
            <input type="submit" name= "acao" id="acao" value="Calcular">
            <br><br>
            <?php
            $divi = $divi1/$divi2;
            echo "A divisão dos números é $divi";
            ?>
        </fieldset>
    </form>
    <br><br><br>
    <form action="" method="get">
        <fieldset>
            <legend>Calculadora da subtração</legend>
            <label for="sub1">Digite o primeiro número</label>
            <input type="number" name="sub1" id="sub1">
            <br>
            <label for="sub2">Digite o primeiro número</label>
            <input type="number" name="sub2" id="sub2">
            <br>
            <input type="submit" name= "acao" id="acao" value="Calcular">
            <br><br>
            <?php
            $sub = $sub1-$sub2;
            echo "A subtração dos números é $sub";
            ?>
        </fieldset>
    </form>
</body>
</html>