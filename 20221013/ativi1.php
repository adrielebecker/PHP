<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body>
    <?php
        require_once('funcoes/funcoes.php');
        $temperatura = [10, 20, 30, 20, 15];
        $media = array_sum($temperatura) / 5;
        $contador = 0;
        $soma = 0;

        // forma do professor:

        // for($i = 0; $i < count($temperatura); $i++){
        //     $soma += $temperatura;
        // }
        // $media = $soma/count($temperatura);
        
        $tempMedia = temperatura($temperatura, $media, $contador);

        echo $tempMedia." dias tem a temperatura acima da média, que é: ".$media;
    ?>
</body>
</html>