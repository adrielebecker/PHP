<!DOCTYPE html>
<?php
    $num1 = "";
    $num2 = "";
    if(isset($_POST['num1']) && isset($_POST['num2'])){
        $num1 = ($_POST['num1']);
        $num2 = ($_POST['num2']);
    }
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Possiveis problemas de pesquisa:</legend>
            <label for="num1">Número 1:</label>
            <input type="text" name="num1" id="num1"><br>
            <label for="num2">Número 1:</label>
            <input type="text" name="num2" id="num2">
            <input type="submit" value="Enviar">
<?php
    if(isset($_POST['num1']) && isset($_POST['num2'])){
        if($num1 == "Eu não sei" && $num2 == "Tambem não sei"){
            echo "Comece a pensar em alguma coisa logo!";
        }
        elseif ($num1 == "To sabendo" && $num2 == "Eu sei o que eu faço!"){
            echo "Parabens, voce é top";
        }
        else{
            echo "Bah, se liga garota!";
        }
    }
?>
        </fieldset>
    </form>
</body>
</html>