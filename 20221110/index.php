<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explode</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="valor1" id="valor1">
        <input type="submit" value="enviar"><br>
    </form>

    <?php
        // array
        // $valor1 = isset($_POST['valor1']) ? $_POST['valor1'] : 0;
        // $vetor = array();

        // echo "Vetor <br>";
        // $vetor = explode(";", $valor1);
        // var_dump($vetor);
        // echo "<br>";
        // for($i = 0; $i < count($vetor); $i++){
        //     echo "$i $vetor[$i] <br>";
        // }

        $valor1 = isset($_POST['valor1']) ? $_POST['valor1'] : 0;
        $matriz = array();
        $linhas = explode(";", $valor1);
        echo "<br> Linhas: <br>";
        var_dump($linhas);
        echo "<br>";
        for($i = 0; $i < count($linhas); $i++){
            $colunas = explode(",", $linhas[$i]);
            $matriz[] = $colunas;
            echo "<br>";
        }

        echo "Matriz";
        var_dump($matriz);
        echo "<br>";
        for($i = 0; $i < count($matriz); $i++){
            for($j = 0; $j < count($matriz[$i]); $j++){
                echo $matriz[$i][$j]." ";
            }
            echo "<br>";
        }

    ?>

</body>
</html>