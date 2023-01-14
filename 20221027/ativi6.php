<!DOCTYPE html>
<?php
    $matriz = array(array(1,2,3,4,5), array(6,7,8,9,10), array(11,12,13,14,15), array(16,17,18,19,20));
    $soma = 0;
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>
<body>
    <?php
        echo "<table border=1px>";
        echo "<caption>Matriz</caption>";
        for($lin = 0; $lin < count($matriz); $lin++){
            echo "<tr>";
            for($col = 0; $col < count($matriz[$lin]); $col++){
                echo "<td>";
                echo $matriz[$lin][$col]."\n";
                echo "</td>";
                $soma += $matriz[$lin][$col];
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
        echo "Soma: ".$soma."\n";    
    ?>
</body>
</html>