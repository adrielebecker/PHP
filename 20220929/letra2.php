<!DOCTYPE html>
<?php
    $caractere = isset($_POST['caractere']) ? $_POST['caractere'] : "";

     function verificaMaiuscula($caractere){
        if($caractere >= "A" && $caractere <= "Z"){
            return "Maiuscula";
        }
        else{
            return "Minuscula";
        }
    }

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
        if(isset($_POST['caractere'])){
            $verificar = verificaMaiuscula($caractere);
            echo $verificar;
        }
    ?>
</body>
</html>