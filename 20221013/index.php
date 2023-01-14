<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
        $pessoas = [25, 50, 1000, 350, 10];
        $quant = 0;
        function comprarIngresso($pessoas, $quant){
            for($i = 0; $i < 5; $i++){
                if($pessoas[$i]-30 >= 0){
                    $quant++;
                }
            }
            return $quant;
        }

        $quantidade = comprarIngresso($pessoas, $quant);

        echo "Das 5 pessoas, apenas ".$quantidade." poderiam ir ao evento.";
    ?>
</body>
</html>