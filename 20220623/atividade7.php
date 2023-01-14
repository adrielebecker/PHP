<!DOCTYPE html>
<?php
$saldo = 0;
if(isset($_POST['saldo']))
   $saldo = ($_POST['saldo']);
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
        <fieldset>
            <legend>Atividade 7</legend>
            <label for="saldo">Digite o saldo médio</label>
            <input type="number" name="saldo" id="saldo">
            <input type="submit" name="acao" id="acao" value="Verificar"><br><br>
<?php
if(isset($_POST['saldo'])){
    if ($saldo >= 0 && $saldo <= 200){
        echo "Nenhum crédito";
    }
    if ($saldo >= 201 && $saldo <= 400){
        $credito = $saldo * 20 / 100;
        echo "O seu crédito é de: " ,$credito;
    }
    if ($saldo >= 401 && $saldo <= 600){
        $credito = $saldo * 30 / 100;
        echo "O seu crédito é de: " ,$credito;
    }
    if ($saldo >= 601){
        $credito = $saldo * 40 / 100;
        echo "O seu crédito é de: " ,$credito;
    }
}
?>
        </fieldset>
    </form>
</body>
</html>