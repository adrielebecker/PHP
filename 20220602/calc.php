<!DOCTYPE html>
<?php
$titulo = "Calculadora";

$num1 = 1;
if(isset($_GET['num1']))
    $num1 = $_GET ['num1'];

$num2 = 1;
if(isset($_GET['num2']))
    $num2 = $_GET['num2'];
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
        <label for="num1">Digite o primeiro número</label>
        <input type="number" name="num1" id="num1">
        <br>
        <label for="num2">Digite o segundo número</label>
        <input type="number" name="num2" id="num2">
        <br><br>
        <input type="submit" name= "acao" id="acao" value="Calcular">
        <br><br>
<?php
if (isset($_GET['acao'])) {
    $soma = $num1+$num2;
    $sub = $num1-$num2;
    $mult = $num1*$num2;
    $div = $num1/$num2;
    echo "A soma dos números é igual a $soma.<br>";
    echo "A subtração dos números é igual a $sub.<br>";
    echo "A multiplicação dos números é igual a $mult.<br>";
    echo "A divisão dos números é igual a $div.<br>";
}
?>
        </fieldset>
    </form>
</body>
</html>