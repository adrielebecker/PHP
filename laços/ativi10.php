<!DOCTYPE html>
<?php
    $sup = 0;
    $inc = 0;
    if(isset($_POST['sup']) && isset($_POST['inc'])){
        $sup = $_POST['sup'];
        $inc = $_POST['inc'];
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
    <form action="" method="post">
        Sup<input type="text" name="sup" id="sup"><br>
        Incre <input type="text" name="inc" id="inc">
        <input type="submit" value="enviar">
    </form>
<?php
    for($i = 0; $i <= $sup; $i += $inc){
        echo "$i <br>";
    }
?>
</body>
</html>