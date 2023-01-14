<!DOCTYPE html>
<?php
$titulo = "PHP";
$metros = 0;
if (isset($_POST["metros"]))
    $metros = $_POST["metros"];
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
        Metros <input type="text" name="metros" id="metros" value=""><br>
        <input type="submit" name="acao" id="acao" value="Enviar">
    </form>
    <?php
      $centimetros = $metros * 100;
      echo "<h3>$metros metros é igual a $centimetros centimetros</h3>";
      ?>
</body>
</html>