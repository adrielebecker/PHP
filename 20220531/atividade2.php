<!DOCTYPE html>
<?php
$titulo = "Aividade 2";

$eleitores = 0;
if(isset($_GET["eleitores"]))
   $eleitores = $_GET["eleitores"];

$brancos = 0;
if(isset($_GET["brancos"]))
   $brancos = $_GET["brancos"];

$nulos = 0;
if(isset($_GET["nulos"]))
    $nulos = $_GET["nulos"];

$validos = 0;
if(isset($_GET["validos"]))
    $validos = $_GET["validos"];
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <form action="" method="get">
        Quantidade de eleitores: <input type="text" name="eleitores" id="eleitores">
        Votos Brancos: <input type="text" name="brancos" id="brancos">
        Votos Nulos: <input type="text" name="nulos" id="nulos">
        Votos Válidos: <input type="text" name="validos" id="validos"><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
      $brancos = 
    ?>
</body>
</html>