<!DOCTYPE html>
<?php
    $matriz = array(array(1,2,3), array(4,5,6), array(7,8,9));
    
    define("LIN", 3);
    define("COL", 3);
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
        echo "<br>";
        for($col = 0; $col < COL; $col++){
            echo $matriz[$lin][$col]."\n";
        }
    }
?>
    
</body>
</html>