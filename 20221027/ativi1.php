<!DOCTYPE html>
<?php
    $matriz1 = [[1,2,3,4,5], [6,7,8,9,10], [11,12,13,14,15], [16,17,18,19,20], [21,22,23,24,25]];
    $matriz2 = array();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body>
    <?php
        echo "<table border=1px>";
        for($linha = 0; $linha < count($matriz1); $linha++){
            echo "<tr>";
            for($coluna = 0; $coluna < count($matriz1[0]); $coluna++){
                echo "<td>";
                echo $matriz1[$linha][$coluna]."\n";
                echo "</td>";
                if(($linha + $coluna) % 2 == 0){
                    $matriz2[$linha][$coluna] = $matriz1[$linha][$coluna];
                }
                else{
                    $matriz2[$linha][$coluna] = 0;
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "<br>";
        
        echo "<table border=1px>";
        for($x = 0; $x < count($matriz2); $x++){
            echo "<tr>";
            for($y = 0; $y < count($matriz2); $y++){
                echo "<td>";
                echo $matriz2[$x][$y]."\n";
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>