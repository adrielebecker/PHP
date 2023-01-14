<!DOCTYPE html>
<?php
    $num = 0;
    if(isset($_POST['num']))
        $num = ($_POST['num']);
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
        <input type="text" name="num" id="num">
        <input type="submit" value="enviar">
    </form>
<?php
    $acum = 1;
    for($i = 1; $i <= $num; $i++){
        $acum = $acum*$i;
    }
    echo "Fat: $acum <br>";
?>
</body>
</html>