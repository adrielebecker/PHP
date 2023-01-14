<!DOCTYPE html>
<?php
    $matrizA = array(array(1,2,3,4), array(5,6,7,8), array(9,10,11,12), array(13,14,15,16));
    $matrizB = array(array(1,2,3,4), array(5,6,7,8), array(9,10,11,12), array(13,14,15,16));
    $soma = array();
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body>
    <?php
        echo "<table border=1px>";
        echo "<caption>Matriz A</caption>";
        for($linA = 0; $linA < count($matrizA); $linA++){
            echo "<tr>";
            for($colA = 0; $colA < count($matrizA[$linA]); $colA++){
                echo "<td>";
                echo $matrizA[$linA][$colA]."\n";
                    echo "</td>";
                }
                echo "</tr>";
            }
        echo "</table>";
        echo "<br>";

        echo "<table border=1px>";
        echo "<caption>Matriz B</caption>";
            for($linB = 0; $linB < count($matrizB); $linB++){
                echo "<tr>";
                for($colB = 0; $colB < count($matrizB[$linB]); $colB++){
                    echo "<td>";
                    echo $matrizB[$linB][$colB]."\n";
                    echo "</td>";
                }
                echo "</tr>";
            }
        echo "</table>";
        echo "<br>";
        
        echo "<table border=1px>";
        echo "<caption>Soma</caption>";
        for($lin = 0; $lin < count($matrizA) && count($matrizB); $lin++){
            echo "<tr>";
            for($col = 0; $col < count($matrizA[$lin]) && count($matrizB[$lin]); $col++){
                $soma = $matrizA[$lin][$col] + $matrizB[$lin][$col];
                echo "<td>";
                echo $soma."\n";
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>