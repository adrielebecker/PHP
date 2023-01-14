<!DOCTYPE html>
 <?php
     $matriz = array(
                    array(2,30,25,4,7)
                );
     $matriz1 = array();
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for($i = 0; $i < count($matriz); $i++){
            for($y = 0;$y < count($matriz[$i]); $y++){
            echo "<pre>";
            echo $matriz[$i][$y];
            echo "<br>";
            array_push($matriz1,$matriz[$i][$y] / 2);
            echo $matriz1[$y];
        }
    }
    ?>
</body>
</html>