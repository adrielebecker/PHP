<!DOCTYPE html>
<?php
    $matriz1 = array(array(1,2,3,4,5), array(6,7,8,9,10), array(11,12,13,14,15), array(16,17,18,19,20));
    $matriz2 = array();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body>
    <?php
        echo "<table border=1px>";
        echo "<caption>Matriz</caption>";
            for($linhas = 0; $linhas < count($matriz1); $linhas++){
                echo "<tr>";
                    for($col = 0; $col < count($matriz1[$linhas]); $col++){
                        echo "<td>";
                        echo $matriz1[$linhas][$col]."\n";
                        echo "</td>";
                        $matriz2[$linhas][$col] = $matriz1[$linhas][$col];
                    }
                echo "</tr>";
            }
        echo "</table>";
        echo "<br>";

        echo "<table border=1px>";
        echo "<caption>Matriz da Metade</caption>";
            for($lin = 0; $lin < count($matriz2); $lin++){
                echo "<tr>";
                    for($colu = 0; $colu < count($matriz2[$lin]); $colu++){
                        echo "<td>";
                        $metade = $matriz2[$lin][$colu] / 2;
                        echo $metade;
                        echo "</td>";
                    }
                echo "</tr>";
            }
        echo "</table>";
    ?>
</body>
</html>