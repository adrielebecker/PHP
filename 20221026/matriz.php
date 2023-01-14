<!DOCTYPE html>
<?php
    $matriz = array();
    define("LIN",3);
    define("COL",3);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Matriz 3x3</title>
</head>
<body>
    <?php
        for($lin = 0; $lin < LIN; $lin++){
            for($col = 0; $col < LIN; $col++){
                $matriz[$lin][$col] = rand(1,9 );
            }
        }

        foreach($matriz as $linha){
            echo "<br>";
            foreach($linha as $item){
                echo $item."\n";
            }
        }
    ?>
</body>
</html>