<!DOCTYPE html>
<?php
    $servicos = [["Fulana",20,31,4],["Beltrana",20,31,4],["Ciclana",20,31,4],["Virgulina",20,31,4],["Xurupita",20,31,4]];
    $matriz = array("fulana" => array("pes" => 20, "maos" => 31, "podo" => 4),
                    "beltrana" => array("pes" => 10, "maos" => 21, "podo" => 2),
                    "ciclana" => array("pes" => 30, "maos" => 12, "podo" => 6),
                    "virgulina" => array("pes" => 22, "maos" => 11, "podo" => 1),
                   "xurupita" => array("pes" => 40, "maos" => 10, "podo" => 3));
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 7</title>
</head>
<body>
    <?php
    for($funci = 0; $funci < count($servicos); $funci++){
        $total = ($servicos[$funci][1] * 10.0) + ($servicos[$funci][2] * 15.0) + ($servicos[$funci][3] * 20.0);
        $servicos[$funci][4] = $total / 2;
    }

    for($i = 0; $i < count($servicos); $i++){
        for($j = 0; $j < count($servicos); $j++){
            echo $servicos[$i][$j]." ";
        }
        echo "<br>";
    }

     foreach($matriz as $funcionarias){
        foreach($funcionarias as $servicos){
            echo $servicos;
        }
     }
    ?>
</body>
</html>