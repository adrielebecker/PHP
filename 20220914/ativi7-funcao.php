<!DOCTYPE html>
<?php
    $salario = isset($_POST['salario']) ? $_POST['salario'] : 0;
    $vendas = isset($_POST['vendas']) ? $_POST['vendas'] : 0;
    $perce = isset($_POST['perce']) ? $_POST['perce'] : 0;
    $nome = isset($_POST['nome']) ? $_POST['nome'] : "";

    function perceVendas($salario, $vendas, $perce, $nome){
        $perVendas = $perce * $vendas;
        return $perVendas;
    }

    function percentualSalario($salario, $vendas, $perce, $nome){
        $percentualSalario = $salario * perceVendas($salario, $vendas, $perce, $nome) / 100;
        return $percentualSalario;
    }

    function valorSalario($salario, $vendas, $perce, $nome){
        $total = percentualSalario($salario, $vendas, $perce, $nome) + $salario;
        return $total;
    }

    function comissao($salario, $vendas, $perce, $nome){
        echo "O funcionário " . $nome . " deverá receber este mês o valor " .
        valorSalario($salario, $vendas, $perce, $nome) .", sendo ". $salario . " de salário e " . percentualSalario($salario, $vendas, $perce, $nome) . " de comissão.";
    }
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 7</title>
</head>
<body>
    <form action="" method="post">
        Nome: <input type="text" name="nome" id="nome"><br>
        Sálario: <input type="text" name="salario" id="salario"><br>
        Valor de Vendas: <input type="text" name="vendas" id="vendas"><br>
        Percentual: <input type="text" name="perce" id="perce">
        <input type="submit" value="Enviar"><br>
<?php
    comissao($salario, $vendas, $perce, $nome);
?>
    </form>
</body>
</html>