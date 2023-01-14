<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 8</title>
</head>
<body>
    <?php
        require_once('funcoes/funcoes.php');
        $a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
        $b = [11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
        $c = array();

        function intercalarVetores($a, $b){
            for($i = 0; $i < 10; $i++){
                $c[] = $a[$i];
                $c[] = $b[$i];
                echo $c[$i];
            }
        }

        echo intercalarVetores($a, $b);
    ?>
</body>
</html>