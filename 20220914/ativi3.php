<!DOCTYPE html>
<?php
    $nome1 = isset($_POST['nome1']) ? ($_POST['nome1']) : "";
    $idade1 = isset($_POST['idade1']) ? ($_POST['idade1']) : 0;
    $nome2 = isset($_POST['nome2']) ? ($_POST['nome2']) : "";
    $idade2 = isset($_POST['idade2']) ? ($_POST['idade2']) : 0;

    function maisVelho($nome1, $idade1, $nome2, $idade2){
        if($idade1 > 0 && $idade2 > 0){
            if($idade1 > $idade2){
                echo "$nome1 é mais velho, com $idade1 anos!";
            }
            else{
                echo "$nome2 é mais velho, com $idade2 anos!";
            }
        }
    }
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body>
    <form action="" method="post">
        Nome 1 <input type="text" name="nome1" id="nome1"><br>
        Idade 1 <input type="text" name="idade1" id="idade1"><br>
        Nome 2 <input type="text" name="nome2" id="nome2"><br>
        Idade 2 <input type="text" name="idade2" id="idade2"><br>
        <input type="submit" value="Enviar"><br>
<?php
    maisVelho($nome1, $idade1, $nome2, $idade2);
?>
    </form>
</body>
</html>