<!DOCTYPE html>
<?php
    $num = isset($_POST['num']) ? $_POST['num'] : 0;
    $matriz = array();
    $linhas = explode(",",$num);
    for($i = 0; $i < count($linhas); $i++){
        $colunas = explode(";",$linhas[$i]);
        $matriz[] = $colunas;
    }
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz 1</title>
</head>
<body>
    <form action="" method="post">
        Numeros: <input type="text" name="num" id="num">
        <input type="submit" value="enviar"><br>
    </form>
    <?php
        // for($i = 0; $i < count($matriz); $i++){
        //     for($j = 0; $j < count($matriz[$i]); $j++){
        //         $soma = $i + $j;
        //         $matriz[$i][$j] = $soma;
        //     }
        // }

        for($k = 0; $k < count($matriz); $k++){
            for($l = 0; $l < count($matriz[$k]); $l++){
                echo $matriz[$k][$l]." ";
            }
            echo "<br>";
        }
    ?>
</body>
</html>