<!DOCTYPE html>
<?php
   $titulo = "Aula de exemplo";
   $cor = "";
   if(isset($_POST['cor']))
       $cor = $_POST['cor'];
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
        <input type="color" name="cor" id="cor">
        <input type="submit" name="acao" id="acao" value="Consultar">
    </form>
    <?php
       echo "Resultado <br>";
       echo $cor;
       echo "<p style='color:$cor'> Este é um texto de exemplo </p>";
    ?>
</body>
</html>