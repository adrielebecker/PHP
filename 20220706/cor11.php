<!DOCTYPE html>
<?php
    $codigo = 0; 
    if(isset($_POST['codigo']))
       $codigo = ($_POST['codigo']);
    
    $nota1 = 0; 
    if(isset($_POST['nota1']))
        $nota1 = ($_POST['nota1']);
    
    $nota2 = 0; 
    if(isset($_POST['nota2']))
        $nota2 = ($_POST['nota2']);
    
    $nota3 = 0; 
    if(isset($_POST['nota3']))
        $nota3 = ($_POST['nota3']);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11 corrigida</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
        <legend>Atividade 11</legend>
        <label for="codigo">Digite o código do aluno:</label>
        <input type="text" name="codigo" id="codigo"><br>
        <label for="nota1">Digite a primeira nota do aluno:</label>
        <input type="text" name="nota1" id="nota1"><br>
        <label for="nota2">Digite a segunda nota do aluno:</label>
        <input type="text" name="nota2" id="nota2"><br>
        <label for="nota3">Digite a terceira nota do aluno:</label>
        <input type="text" name="nota3" id="nota3"><br>
        <input type="submit" name="acao" id="acao" value="Verificar">
        <br>
<?php
    if(isset($_POST['nota1']) && isset($_POST['nota2']) && isset($_POST['nota3']) && isset($_POST['codigo']));{
        $media = ($nota1*4 + $nota2*3 + $nota3*3) / 10;
        if($media >= 5){
            echo "$codigo: sua média foi $media e você está aprovado";
        }
        else{
            echo "$codigo: sua média foi $media e você está reprovado";
        }
    }
?>
        </fieldset>
    </form>
</body>
</html>