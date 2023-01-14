<!DOCTYPE html>
<?php
    $sup = 0; 
    $inf = 0; 
    $inc = 0; 
    if(isset($_POST['sup']) && isset($_POST['inf']) && isset($_POST['inc'])){
        $sup = ($_POST['sup']);
        $inf = ($_POST['inf']);
        $inc = ($_POST['inc']);
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
        sup <input type="text" name="sup" id="sup"><br>
        inf <input type="text" name="inf" id="inf"><br>
        inc <input type="text" name="inc" id="inc">
        <input type="submit" value="enviar">
    </form>
<?php
    for($i = $sup; $i >= $inf; $i -= $inc){
        $cel = 5 * ($i - 32) / 9;
        echo "Celcius: $cel <br>
              Fahre: $i <br>";
    }
?>
</body>
</html>