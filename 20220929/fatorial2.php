<!DOCTYPE html>
<?php
    $num = isset($_POST['num']) ? $_POST['num'] : 0;
    
    function fatorial($num){
        $acumulador = 1;
        for($i = 1; $i <= $num; $i++){
            $acumulador = $acumulador * $i;
        }
        return $acumulador;
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
    <?php
        echo "<h1> O Fatorial do ".$num." é: ".fatorial($num);
    ?>
</body>
</html>