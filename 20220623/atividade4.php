<!DOCTYPE html>
<?php
$nome = "";
if(isset($_POST['nome']))
   $nome = ($_POST['nome']);
$diaria = 0;
if(isset($_POST['diaria']))
   $diaria = ($_POST['diaria']);
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
        <fieldset>
            <legend>Atividade 4</legend>
            <label for="nome">Digite o nome do cliente:</label>
            <input type="text" name="nome" id="nome"><br>
            <label for="diaria">Digite o número de diárias:</label>
            <input type="number" name="diaria" id="diaria">
            <input type="submit" name="acao" id="acao" value="Enviar"><br><br>
<?php
if ($diaria > 15){
    $valor = ($diaria * 5.5) + ($diaria * 60);
    echo "A conta total de " ,$nome, " é de R$: ",$valor;
}
if ($diaria == 15){
    $valor = ($diaria * 6) + ($diaria * 60);
    echo "A conta total de ",$nome," é de R$: ",$valor;
}
if ($diaria < 15){
    $valor = ($diaria * 8) + ($diaria * 60);
    echo "A conta total de ",$nome," é de R$: ",$valor;
}
?>
        </fieldset>
    </form>
</body>
</html>