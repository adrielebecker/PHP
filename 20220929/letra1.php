<!DOCTYPE html>
<?php
    $caractere = isset($_POST['caractere']) ? $_POST['caractere'] : "";

     function verificaMaiuscula($caractere){
        if($caractere >= "A" && $caractere <= "Z"){
            return "1";
        }
        else{
            return "0";
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
    <form action="letra2.php" method="post">
        Caractere: <input type="text" name="caractere" id="caractere">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>