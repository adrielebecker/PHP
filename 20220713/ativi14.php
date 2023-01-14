<!DOCTYPE html>
<?php
    $lado1 = 0;
    $lado2 = 0;
    $lado3 = 0;
    if(isset($_POST['lado1']) && isset($_POST['lado2']) && isset($_POST['lado3'])){
        $lado1 = ($_POST['lado1']);
        $lado2 = ($_POST['lado2']);
        $lado3 = ($_POST['lado3']);
    }
?>
<html lang="pt-BR">
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
            <label for="lado1">Lado 1 do triângulo</label>
            <input type="number" name="lado1" id="lado1"><br>
            <label for="lado2">Lado 1 do triângulo</label>
            <input type="number" name="lado2" id="lado2"><br>
            <label for="lado3">Lado 1 do triângulo</label>
            <input type="number" name="lado3" id="lado3">
            <input type="submit" name="acao" id="acao" value="Verificar"><br>
<?php
    if(isset($_POST['lado1']) && isset($_POST['lado2']) && isset($_POST['lado3'])){

        if($lado1 + $lado2 > $lado3 && $lado1 + $lado3 > $lado2 && $lado2 + $lado3 > $lado1){
            if($lado1 == $lado2 && $lado2 == $lado3){
                echo "Triângulo Equilátero!";
            }
            else if($lado1 != $lado2 && $lado1 != $lado3 && $lado2 != $lado3){
                echo "Triângulo Escaleno!";
            }
            else {
                echo "Triângulo Isóseles!";
            }
        }
        else{
            echo "Não é um triângulo!";
        }
    }
?>
        </fieldset>
    </form>
</body>
</html>