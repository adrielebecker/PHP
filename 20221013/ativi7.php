<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 7</title>
</head>
<body>
    <?php
        $vet = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $acumu = 1;

        function fatVet($vet, $acumu){
            for($i = 0; $i < 10; $i++){
                for($j = 0; $j < $vet[$i]; $j++){
                    $acumu = $acumu * $j;
                    echo $acumu."<br>";
                }
            }
        }

        echo fatVet($vet, $acumu);
    ?>
</body>
</html>