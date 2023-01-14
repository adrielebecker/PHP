<!DOCTYPE html>
<?php
$nome = "";
if(isset($_POST['nome']))
   $nome = ($_POST['nome']);
$nota = 0;
if(isset($_POST['nota']))
   $nota = ($_POST['nota']);
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Atividade 5</legend>
            <label for="nome">Digite o nome do aluno:</label>
            <input type="text" name="nome" id="nome"><br>
            <label for="nota">Digite a nota do aluno:</label>
            <input type="number" name="nota" id="nota">
            <input type="submit" name="acao" id="acao" value="Enviar"><br><br>
<?php
if ($nota >= 0 && $nota <= 49){
    echo "A nota de " ,$nome, " é: " ,$nota, " e seu conceito é Insuficiente!";}
if ($nota >= 50 && $nota <= 64){
    echo "A nota de " ,$nome, " é: " ,$nota, " e seu conceito é Regular!";}
if ($nota >= 65 && $nota <= 84){
    echo "A nota de " ,$nome, " é: " ,$nota, " e seu conceito é Bom!";}
if ($nota >= 85 && $nota <= 100){
    echo "A nota de " ,$nome, " é: " ,$nota, " e seu conceito é Ótimo!";}
?>
        </fieldset>
    </form>
</body>
</html>