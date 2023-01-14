<!DOCTYPE html>
<?php
    $num = isset($_POST['num']) ? $_POST['num'] : 0;
    $acumu = 1;

    function serieFibonacci($num){
        $ant = 0;
        $fib = 1;
        echo $ant." ".$fib." ";
        for($i = 2; $i < $num; $i++){
            $aux = $ant;
            $ant = $fib;
            $fib = $fib + $aux;
            echo $fib." ";
        }
    }
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="fibonacci2.php" method="post">
    Número: <input type="text" name="num" id="num">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>