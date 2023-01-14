<!DOCTYPE html>
<?php
$titulo = "Atividade 1";
$num1 = 0;
if(isset($_POST["num1"]))
   $num1 = $_POST["num1"];
$antecessor = 0;
if(isset($_POST["antecessor"]))
$antecessor = $_POST["antecessor"];
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <form action="" method="post">
        Número 1 <input type="text" name="num1" id="num1"><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    $antecessor = $num1 - 1;
    echo "<h3>O antecessor é o $antecessor </h3>";
    ?>
</body>
</html>