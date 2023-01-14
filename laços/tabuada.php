<!DOCTYPE html>
<?php
    $com = 0;
    $fim = 0;
    $tab = 0;
    if(isset($_POST['com']) && isset($_POST['fim']) && isset($_POST['tab'])){
        $com = ($_POST['com']);
        $fim = ($_POST['fim']);
        $tab = ($_POST['tab']);
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
        com <input type="text" name="com" id="com"><br>
        fim <input type="text" name="fim" id="fim"><br>
        tab <input type="text" name="tab" id="tab">
        <input type="submit" value="enviar">
    </form>
<?php
    if($com < $fim){
        for($i = $com; $i <= $fim; $i++){
            $tabu = $i * $tab;
            echo "$i X $tab = $tabu <br>";
        }
    }
    else{
        for($i = $fim; $i <= $com; $i++){
            $tabu = $i * $tab;
            echo "$i X $tab = $tabu <br>"; 
        }
    }
?>
</body>
</html>