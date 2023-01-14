<!DOCTYPE html>
<?php
    $num = 0;
    if(isset($_POST['num']))
        $num = ($_POST['num']);
    
    function fatorial($num){
        $acumulador = 1;
        for($i = 1; $i <= $num; $i++){
            $acumulador = $acumulador * $i;
        }
    }
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action</title>
</head>
<body>
    <form action="fatorial2.php" method="post">
        <label for="num">Número</label>
        <input type="text" name="num" id="num"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>