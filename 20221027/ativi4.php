<!DOCTYPE html>
<?php
    $matriz1 = array(array(1,2,3,4), array(6,7,8,9), array(11,12,13,14));
    $matriz2 = array();
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>
<body>
    <?php
        echo "<table border=1px>";
        echo "<caption>Matriz</caption>";
            for($lin = 0; $lin < count($matriz1); $lin++){
                echo "<tr>";
                    for($col = 0; $col < count($matriz1[$lin]); $col++){
                        echo "<td>";
                        echo $matriz1[$lin][$col]."\n";
                        echo "</td>";
                        $matriz2[$lin][$col] = $matriz1[$lin][$col];
                    }
                echo "</tr>";
            }
        echo "</table>";
        echo "<br>";

        echo "<table border=1px>";
        echo "<caption>Matriz do Triplo</caption>";
        for($lin = 0; $lin < count($matriz2); $lin++){
            echo "<tr>";
                for($col = 0; $col < count($matriz2[$lin]); $col++){
                    echo "<td>";
                    $triplo = $matriz2[$lin][$col] * 3;
                    echo $triplo;
                    echo "</td>";
                }
            echo "</tr>";
        } 
        echo "</table>";
    ?>
</body>
</html>