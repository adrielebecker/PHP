<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 7</title>
</head>
<body>
    <?php 
    $num1 = 10;
    $num2 = 3;
    $diferença1 = ($num1*$num1)-(2*$num1*$num2)+($num2*$num2);
    $qnum1 = $num1*$num1;
    $qnum2 = $num2*$num2;
    $diferença2 = $qnum1-$qnum2;
    echo "O primeiro número é o $num1 <br>";
    echo "O segundo número é o $num2 <br>";
    echo "A diferença do quadrado entre os dois números é: $diferença1 <br>";
    echo "A diferença dos quadrados de cada é: $diferença2";
    ?>
</body>
</html>