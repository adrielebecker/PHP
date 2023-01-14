<!DOCTYPE html>
<?php
    $num1 = 0;
    $num2 = 0;
    $operacao = "";
    if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacao'])){
        $num1 = ($_POST['num1']);
        $num2 = ($_POST['num2']);
        $operacao = ($_POST['operacao']);
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
            <legend>Atividade 19</legend>
            <label for="num1">Digite o primeiro número:</label>
            <input type="number" name="num1" id="num1"><br>
            <label for="num2">Digite o segundo número:</label>
            <input type="number" name="num2" id="num2"><br>
            <label for="operacao">Digite o símbolo da operação que você deseja realizar:</label>
            <input type="text" name="operacao" id="operacao"><br>
            <input type="submit" value="Enviar" name="acao" id="acao">
            <br>
<?php
if(isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operacao'])){
    switch ($operacao){
        case "+":
            $soma = $num1 + $num2;
            echo "A operação é a soma: $num1 + $num2 = $soma";
            break;
        case "-":
            $sub = $num1 - $num2;
            echo "A operação é a subtração: $num1 - $num2 = $sub";
            break;
        case "*":
            $multi = $num1 * $num2;
            echo "A operação é a multiplicação: $num1 * $num2 = $multi";
            break;
        case "/":
            $divi = $num1 / $num2;
            echo "A operação é a divisão: $num1 / $num2 = $divi";
            break;
        default:
            echo "Operação inválida";
    }
}
?>
        </fieldset>
    </form>
</body>
</html>