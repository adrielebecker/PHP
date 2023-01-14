<!DOCTYPE html>
<?php
    $nome = "";
    $tipo = 0;
    $valor = 0.0;
    if(isset($_POST['nome']) && isset($_POST['tipo']) && isset($_POST['valor'])){
        $nome = ($_POST['nome']);
        $tipo = ($_POST['tipo']);
        $valor = ($_POST['valor']);
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
            <legend>Atividade 18</legend>
            <label for="nome">Digite seu nome:</label>
            <input type="text" name="nome" id="nome"><br>
            <label for="tipo">Digite o tipo de combustivel:</label>
            <input type="text" name="tipo" id="tipo"><br>
            <label for="valor">Digite o valor do abastecimento:</label>
            <input type="text" name="valor" id="valor"><br>
            <input type="submit" value="Verificar" name="acao" id="acao"><br>
<?php
    if(isset($_POST['nome']) && isset($_POST['tipo']) && isset($_POST['valor'])){
        switch(strtolower($tipo)){
            case "1":
                $preco = $valor*0.9;
                echo "$nome, o valor a ser pago é R$ $preco";
                break;
            case "2":
                $preco = $valor*0.92;
                echo "$nome, o valor a ser pago é R$ $preco";
                break;
            case "3":
                $preco = $valor*0.94;
                echo "$nome, o valor a ser pago é R$ $preco";
                break;
            default:
                echo "$nome, você digitou um tipo inválido!";
        }
    }
?>
        </fieldset>
    </form>
</body>
</html>