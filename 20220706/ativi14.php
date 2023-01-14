<!DOCTYPE html>
<?php
    $senha = 0;
    if(isset($_POST['senha']))
        $senha = ($_POST['senha']);
?>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 14</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Atividade 14</legend>
            <label for="senha">Digite a senha:</label>
            <input type="password" name="senha" id="senha"><br>
            <input type="submit" name="acao" id="acao" value="Verificar"><br>
<?php
    if($senha == 1234){
        echo "<p style = 'color: green'> ACESSO PERMITIDO </p>";
    }
    else{
        echo "<p style = 'color: red'> ACESSO NEGADO </p>";
    }
?>
        </fieldset>
    </form>
</body>
</html>