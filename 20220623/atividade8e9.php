<!DOCTYPE html>
<?php
$nome = "";
if(isset($_POST['nome']))
   $nome = ($_POST['nome']);
$sexo = "";
if(isset($_POST['sexo']))
   $sexo = ($_POST['sexo']);
$altura = 0;
if(isset($_POST['altura']))
   $altura = ($_POST['altura']);
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 8 e 9</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Atividade 8</legend>
            <label for="nome">Digite o seu nome:</label>
            <input type="text" name="nome" id="nome"><br>
            <label for="sexo">Qual é o seu sexo?</label>
            <input type="radio" name="sexo" id="sexo" value="feminino">Feminino 
            <input type="radio" name="sexo" id="sexo" value="masculino">Masculino <br>
            <label for="altura">Qual é a sua altura?</label>
            <input type="number" step="any" name="altura" id="altura">
            <input type="submit" name="acao" id="acao" value="Calcular peso ideal"><br><br>
<?php
if ($sexo == "feminino"){
    $pesoideal = (62.1 * $altura) - 44.7;
    echo $nome, " seu peso ideal é: " ,$pesoideal, "kg";
}
if ($sexo == "masculino"){
    $pesoideal = (72.7 * $altura) - 58;
    echo $nome, " seu peso ideal é: " ,$pesoideal, "kg";
}
if ($sexo != "feminino" && $sexo != "masculino"){
    echo "Sexo inválido";
}
?>
        </fieldset>
    </form>
</body>
</html>