<!DOCTYPE html>
<?php
    $text = isset($_POST['text']) ? $_POST['text'] : "";
    $radio1 = isset($_POST['radio1']) ? $_POST['radio1'] : "";
    $check1 = isset($_POST['check1']) ? $_POST['check1'] : 0;
    $check2 = isset($_POST['check2']) ? $_POST['check2'] : 0;
    $cor = isset($_POST['cor']) ? $_POST['cor'] : "";
    $num = isset($_POST['num']) ? $_POST['num'] : 0;
    $estado = isset($_POST['estado']) ? $_POST['estado'] : "";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secundaria</title>
</head>
<body>
    <?php
        echo "Num arredondado para cima: ".ceil($num) . "<br>". //arredonda um numero para cima
        "Num arredondado para baixo: ".floor($num)."<br>".
        "Tamanho da string: ".mb_strlen($text)."<br>". //retorna o tamanho da string
        "String invertida: ".strrev($text)."<br>".
        "Primeira letra maiuscula: ".ucfirst($text)."<br>".
        "Primeira letra de cada palavra maiuscula: ".ucwords($text)."<br>".
        "Data atual: ".date('d/m/Y')."<br>".
        "Sortear numeros entre 1 e 100: ".rand(1,100)."<br>".
        "Elevar num ao quadrado: ".pow($num, 2)."<br>".
        "Parte da string: ".substr($text, 0,4);
    ?>
</body>
</html>